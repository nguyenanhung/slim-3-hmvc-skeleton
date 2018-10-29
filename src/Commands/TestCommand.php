<?php
/**
 * Project slim-3-skeleton.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/23/18
 * Time: 22:38
 */

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\Library\Config;
use App\Library\Db;

/**
 * Class TestCommand
 *
 * @package   App\Command
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class TestCommand extends Command
{
    /** @var object \Psr\Container\ContainerInterface */
    protected $container;

    /**
     * Function configure
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/23/18 22:28
     *
     */
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:test-command')
            // the short description shown while running "php bin/console list"
            ->setDescription("Hello World!")
            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('Hello World!');
    }

    /**
     * Function execute
     *
     * @author  : 713uk13m <dev@nguyenanhung.com>
     * @time    : 10/23/18 22:28
     *
     * @param \Symfony\Component\Console\Input\InputInterface   $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @command php cli.php app:demo-command
     *
     * @return int|null|void
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        // Load config
        $settings = Config::getSettings();
        // Example Load DB
        $db      = Db::load($settings['db']);
        $query   = $db->select()->from('TuVi')->where('date', '=', '2018-10-24');
        $execute = $query->execute();
        $content = $execute->fetch();
        $output->writeLn(json_encode($content));
        // Example Output String
        $output->writeLn("Hello World!");
    }
}