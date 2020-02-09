<?php
declare(strict_types=1);

namespace App\Console;

use App\Infrastructure\Model\Weather\RepositoryFactory;
use App\Model\Weather\Entity\Weather;
use App\Model\Weather\Repository\WeatherRepositoryInterface;
use App\Model\Weather\UseCases\WeatherLoaderInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class LoadWeatherCommand extends Command
{
    private WeatherLoaderInterface $loader;
    private RepositoryFactory $factory;

    public function __construct(WeatherLoaderInterface $loader, RepositoryFactory $factory)
    {
        parent::__construct();
        $this->loader = $loader;
        $this->factory = $factory;
    }

    protected function configure(): void
    {
        $this->setName('app:load-weather');
        $this->setDescription('Загрузить и сохранить текущую погоду');
        $this->addArgument('type', InputArgument::REQUIRED, 'Введите тип файла сохранения');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /** @var WeatherRepositoryInterface $repository */
        $repository = $this->factory->createRepository($input->getArgument('type'));

        /** @var Weather $weather */
        $weather = $this->loader->load();

        $repository->add($weather);

        $output->writeln('<info>Done!</info>');
        return 0;
    }
}
