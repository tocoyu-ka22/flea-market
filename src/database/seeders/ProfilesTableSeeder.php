<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => '1',
            'img_url' => 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi3QKeYbH-ykNDVkhay1yAXcNrsjjODTY2CYs9uksl2NpnON1uEmdDl0G3cwVKvaG-r_SbkAhpY0YMrRJpBxWiYP84S6lM999_mkMJPCZMn3DiqmFOrDtlxvwdWsnx_616UcYBEWV-Yix-n/s800/count_boy.png',
            'postcode' => '1234567',
            'address' => '茨城県石岡市行里川572-4',
            'building' => ''
        ];
        DB::table('profiles')->insert($param);

        $param = [
            'user_id' => '2',
            'img_url' => 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi-pD85E314pUt7bHn5AaqfcgSXN06km90bTHvwRySwzwt-RCOmG-kzqlUnPah5r_oHxT3vsnEMnteqpoj8jLT9CdgLdeDUQpu0pXs_BwQXwVmnnySz04jL4p-TzNlPYB8FiRsDdF3zL239/s800/count_girl.png',
            'postcode' => '1010101',
            'address' => '北海道士別市東丘3-283-1',
            'building' => 'コーポハイツ201'
        ];
        DB::table('profiles')->insert($param);

        $param = [
            'user_id' => '3',
            'img_url' => 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj1ZJdPlHRuQs00koa7lQJzotRUMMzZV48ddCgk_P0UI-_AYsfXDVlXhGPBCsz3puNkRSlwa5LFlQtuzxOoXFpy4qtUBgWyVe3fSdxVQped71vOczKq1N8qEWgIku4cpTcSaGFv3PrlhDtM/s800/whiteboy1_1smile.png',
            'postcode' => '0000000',
            'address' => '810 Durian St, Foxton, CO 80433',
            'building' => ''
        ];
        DB::table('profiles')->insert($param);

        $param = [
            'user_id' => '4',
            'img_url' => 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgcLrlTWvlo8IjUew0qEKpKa34b-_k3EgPdrzOSJD7anlEgsjPq1WQxRHIbHhoLwizVqDyymA6w32-2LgKucG2cehATha4eeAA5xwivllJxN8l9973krYezJAmBQyvJMEvrLnSM1zWtNUQ/s800/boy_09.png',
            'postcode' => '2020202',
            'address' => '兵庫県丹波市氷上町浅敷228-15',
            'building' => 'ミドリマンション102'
        ];
        DB::table('profiles')->insert($param);

        $param = [
            'user_id' => '5',
            'img_url' => 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgu5i-ULIxNhlmDc3da2uVuChpYOi-oppkRvDbs8k7qu2lBG3v30mGtBkDoRKa0hdyLfA0tVcc6T3KNfIAJzLlkC3eb17DwFds3IxHdqgLNoJ4IrezHrUMzcMV5DpPsXdRGOOgP0VNVMGo/s800/girl_15.png',
            'postcode' => '3030303',
            'address' => '東京都青梅市今寺2-333-1',
            'building' => ''
        ];
        DB::table('profiles')->insert($param);
    }
}
