<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('todos')->insert([
            [
                'title' => 'Поменять краску в принтере, ком. 404',
                'description' => 'Чёрно-белый принтер Canon,  инвентарный номер - 564652134686100',
                'created_at' => date('d.m.Y H:i'),
                'updated_at' => date('d.m.Y H:i'),
            ],
            [
                'title' => 'Переустановить Windows, ПК-Hall24',
                'description' => 'Описания нет',
                'created_at' => date('d.m.Y H:i'),
                'updated_at' => date('d.m.Y H:i'),
            ],
            [
                'title' => 'Установить обновление КВ-XXX',
                'description' => 'Вышло критическое обновление, нужно поставить обновления в следующем приоритете: 1) сервера, 2) рабочие станции',
                'created_at' => date('d.m.Y H:i'),
                'updated_at' => date('d.m.Y H:i'),
            ],
        ]);
    }
}
