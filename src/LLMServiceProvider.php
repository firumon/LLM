<?php

namespace Firumon\LLM;

use Illuminate\Support\ServiceProvider;

class LLMServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadConfigs();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrations();
        $this->registerEvents();
    }

    private function stripSlashes($text){ return trim($text,"\\\/"); }
    private function getRootPath(){ return __DIR__ . '/..'; }
    private function getFullPath($folder){ return implode('/',[$this->stripSlashes($this->getRootPath()),$this->stripSlashes($folder),""]); }
    private function getProjectMigrationPath(){ return $this->getFullPath('migrations'); }
    private function getProjectConfigFilePath($file){ return $this->getFullPath('config') . $file; }
//    private function getProjectRoutesPath(){ return $this->getFullPath('routes'); }

    private function loadMigrations(){
        $source = $this->getProjectMigrationPath();
        $this->loadMigrationsFrom($source);
    }

    private function registerEvents(){
        Events::Register();
    }

    private function loadConfigs(){
        $this->mergeConfigFrom($this->getProjectConfigFilePath('filesystems.disks.php'),'filesystems.disks.llm');
    }
}
