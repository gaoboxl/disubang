<?php
namespace app\common\command;

use think\console\Command;
use think\console\Input;
use think\console\input\Argument;
use think\console\input\Option;
use think\console\Output;
use think\console\command\Make;
use think\{App};
use think\facade\Env;
class View extends Command
{
	
	//定义命令
    protected function configure()
    {
        $this->setName('hello')
        	->addArgument('name', Argument::OPTIONAL, "your path")
            ->addOption('t', null, Option::VALUE_REQUIRED, 'view name')
        	->setDescription('create view');
    }

	//执行命令
    protected function execute(Input $input, Output $output)
    {
		//是否输入路径
    	$path = trim($input->getArgument('name'));
		if(empty($path)){
			$output->writeln("Please enter your path");
			return false;
		}
		
		//是否输入模板名
		if (!$input->hasOption('t')) {
        	
			$output->writeln("Please enter the template name");
			return false;	
        }
        
		$name = $input->getOption('t');
		
        $pathname = $this->getPathName($path,$name);
		
		if (is_file($pathname)) {
			$output->writeln('<error>' . $name . ' already exists!</error>');
			return false;
		}

		if (!is_dir(dirname($pathname))) {
			mkdir(dirname($pathname), 0755, true);
		}

        file_put_contents($pathname, $this->buildClass($name));

        $output->writeln('<info>view template created successfully.</info>');	

    }
	
	
	 protected function getPathName($path,$name)
    {
        $path = str_replace('/', '/view/',$path);
		
		return Env::get('app_path').$path.'/'.$name.'.html';
		 
    }
	
	protected function buildClass($name)
    {
		$file = Env::get('app_path').'/common/view/'.$name.'.html';
		
        return file_get_contents($file);

    }
	

}