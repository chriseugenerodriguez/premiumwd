<?php
class Config {
	public static $templateDir = "/tmp/templates";
	public static $pluginDir = "/tmp/plugins";
	public static $workingDir = "/tmp/working";
	public static $outputDir = "/tmp/output";
	public static $autoloadFile = "plugin-installer.php";
	public static $invoices = array(
		array(
			'invoice_id' => '12345abc',
			'theme' => 'test',
			'plugins' => array(
				'test1',
				'test2'
			)
		)
	);
}

// Make sure we are given a command
if(empty($argv[1])) {
	die("Please provide a second parameter. For example:\n".
		"php generate.php populate\n".
		"php generate.php run\n".
		"php generate.php cleanup\n");
}

// Run the script
switch($argv[1]) {
	case 'populate':
		Utility::createDirectories();
		Utility::createTemplates();
		Utility::createPlugins();
		break;
	case 'run':
		$invoices = Run::getInvoices();
		Run::processInvoices($invoices);
		break;
	case 'cleanup':
		Utility::removeDirectories();
		break;
}


/**
 * Various initializing tasks
 */
class Utility {
	/**
	 * Setup all the directories we will need
	 */
	public static function createDirectories() {
		echo "Creating directories\n";

		foreach(array(Config::$templateDir, Config::$pluginDir, Config::$outputDir, Config::$workingDir) as $directory) {
			if(!file_exists($directory)) {
				mkdir($directory,0777,true);
				echo sprintf("Created %s\n", $directory);
			}
		}

		echo "All directories created\n";
	}

	/**
	 * Create the base templates
	 */
	public static function createTemplates() {
		echo "Creating templates\n";

		$template = Config::$templateDir.'/test';
		if(!file_exists($template)) {
			mkdir($template,0777);
			mkdir($template.'/plugins',0777);
			file_put_contents($template.'/index.php',"Content");
			file_put_contents($template.'/style.css',"Css content");
			file_put_contents($template.'/'.Config::$autoloadFile,"<?php\n%PLUGINS%\n?>");
		}

		echo "All templates created\n";
	}

	/**
	 * Create the base plugins
	 */
	public static function createPlugins() {
		echo "Creating plugins\n";

		foreach(array(Config::$pluginDir.'/test1.zip',Config::$pluginDir.'/test2.zip') as $plugin) {
			if(!file_exists($plugin)) {
				file_put_contents($plugin,"Content");
			}
		}

		echo "All plugins created\n";
	}

	/**
	 * Remove all created directories
	 */
	public static function removeDirectories() {
		echo "Removing directories\n";

		foreach(array(Config::$templateDir, Config::$pluginDir, Config::$outputDir, Config::$workingDir) as $directory) {
			if(file_exists($directory)) {
				exec("rm -rf $directory");
				echo sprintf("Deleted %s\n", $directory);
			}
		}

		echo "All directories removed\n";
	}
}

/**
 * Runs the generation script
 */
class Run {
	/**
	 * Fetches any invoices that need to be processed
	 */
	public function getInvoices() {
		$invoices = array();

		echo "Retrieving invoices from database\n";
	 	//TODO Connect to the database
		//TODO Fetch all records from woocommerce that do not have an entry in theme_generation table


		// For now we'll fake it
		$invoices = Config::$invoices;

		echo sprintf("Found %d invoices\n",count($invoices));

	 	return $invoices;
	}

	/**
	 * Runs through each invoice and generates the output zip
	 * @param array $invoices The list of invocies to process
	 */
	public function processInvoices(array $invoices) {
		echo sprintf("Processing %d invoices\n",count($invoices));
		foreach($invoices as $invoice) {
			if(self::copySourceTemplate(Config::$templateDir, Config::$workingDir, $invoice)) {
				self::copyPlugins(Config::$pluginDir, Config::$workingDir, $invoice);
				self::modifyAutoloadFile(Config::$autoloadFile, Config::$workingDir, $invoice);
				self::zipTheme(Config::$outputDir, Config::$workingDir, $invoice);
				self::cleanupWorkingDir(Config::$workingDir, $invoice);
			}
		}
		echo "Done processing invoices\n";
	}

	/**
	 * Copies source template into working directory name by invoice id
	 * @param string $templateDir The base template directory 
	 * @param string $workingDir The base working directory
	 * @param array $invoice The invoice data
	 */
	protected function copySourceTemplate($templateDir, $workingDir, array $invoice) {
		$template = $templateDir.'/'.$invoice['theme'];
		if(!file_exists($template)) {
			echo "Theme directory not found: $template\n";
			return false;
		}

		$working = $workingDir.'/'.$invoice['invoice_id'];
		if(!file_exists($working)) {
			mkdir($working, 0777);
		} else {
			exec("rm -rf $working/*");
		}

		exec(sprintf('cp -r %s/* %s',$template, $working));
		echo "Created working directory: $working from template: $template\n";
		return true;
	}

	/**
	 * Copies source plugins into working directory
	 * @param string $pluginDir The base plugin directory 
	 * @param string $workingDir The base working directory
	 * @param array $invoice The invoice data
	 */
	protected function copyPlugins($pluginDir, $workingDir, array $invoice) {
		if(!empty($invoice['plugins'])) {
			foreach($invoice['plugins'] as $plugin) {
				$pluginFile = $pluginDir.'/'.$plugin.'.zip';
				$workingPluginDir = $workingDir.'/'.$invoice['invoice_id'].'/plugins';
				if(file_exists($pluginFile)) {
					echo "Copying plugin $plugin\n";
					exec("cp $pluginFile $workingPluginDir");
				} else {
					echo "Plugin not found: $pluginFile\n";
				}
			}
		} else {
			echo "No plugins found for invoice: {$invoice['invoice_id']}\n";
		}
	}

	/**
	 * Modifies the autoload PHP script to load all our plugins
	 * @param string $autoloadFile The autoload file
	 * @param string $workingDir The base working directory
	 * @param array $invoice The invoice data
	 */
	protected function modifyAutoloadFile($autoloadFile, $workingDir, array $invoice) {
		if(!empty($invoice['plugins'])) {
			$file = $workingDir.'/'.$invoice['invoice_id'].'/'.$autoloadFile;
			if(file_exists($file)) {
				$content = file_get_contents($file);	

				//TODO generate the PHP code to load the various plugins

				// Fake it to demonstrate
				$pluginStr = implode(',', $invoice['plugins']);
				$content = str_replace('%PLUGINS%',$pluginStr,$content);

				file_put_contents($file, $content);
				echo "Modified autoload file: $file\n";
			} else {
				echo "Autoload file does not exist: $file\n";
			}
		}
	}

	/**
	 * Zips an invoice theme directory
	 * @param string $outputDir The output directory
	 * @param string $workingDir The base working directory
	 * @param array $invoice The invoice data
	 */
	protected function zipTheme($outputDir, $workingDir, array $invoice) {
		$template = $workingDir.'/'.$invoice['invoice_id'];
		if(file_exists($template)) {
			$zipFile = $outputDir.'/'.$invoice['invoice_id'].'.zip';
			exec("cd $template;zip -r $zipFile .");
			echo "Created zip file: $zipFile\n";
		}
	}

	/**
	 * Removes the temporary working directory
	 * @param string $workingDir The base working directory
	 * @param array $invoice The invoice data
	 */
	protected function cleanupWorkingDir($workingDir, array $invoice) {
		$template = $workingDir.'/'.$invoice['invoice_id'];
		if(file_exists($template)) {
			exec("rm -rf $template");
			echo "Removed directory: $template\n";
		}
	}
}

die("--------------------------\nScript completed\n\n");
