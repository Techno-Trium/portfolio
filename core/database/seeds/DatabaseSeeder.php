<?php



use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('CategoriesTableSeeder');
        $this->call('ProductsTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('UserTypesTableSeeder');
        $this->call('SettingsTableSeeder');
        $this->call('PluginsTableSeeder');
        $this->call('ThemesTableSeeder');
    }
}
