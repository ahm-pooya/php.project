<?php

namespace Database\Seeders;

use Faker\Guesser\Name;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Ostanseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ostans')->insert([
            
        ['id'=>'1', 'ostan'=>'آذربایجان شرقی'],
        ['id'=>'2', 'ostan'=>'آذربایجان غربی'],
        ['id'=>'3', 'ostan'=>'اردبیل'],
        ['id'=>'4', 'ostan'=>'اصفهان'],
        ['id'=>'5', 'ostan'=>'البرز'],
        ['id'=>'6', 'ostan'=>'ایلام'],
        ['id'=>'7', 'ostan'=>'بوشهر'],
        ['id'=>'8', 'ostan'=>'تهران'],
        ['id'=>'9', 'ostan'=>'چهارمحال و بختیاری'],
        ['id'=>'10','ostan'=> 'خراسان جنوبی'],
        ['id'=>'11','ostan'=> 'خراسان رضوی'], 
        ['id'=>'12','ostan'=> 'خراسان شمالی'] ,
        ['id'=>'13','ostan'=> 'خوزستان'],
        ['id'=>'14','ostan'=> 'زنجان'],
        ['id'=>'15','ostan'=> 'سمنان'] ,
        ['id'=>'16','ostan'=> 'سیستان و بلوچستان'],
        ['id'=>'17','ostan'=> 'فارس'] ,
        ['id'=>'18','ostan'=> 'قزوین'] ,
        ['id'=>'19','ostan'=> 'قم'] ,
        ['id'=>'20','ostan'=> 'كردستان'],
        ['id'=>'21','ostan'=> 'كرمان'] ,
        ['id'=>'22','ostan'=> 'كرمانشاه'] ,
        ['id'=>'23','ostan'=> 'کهگیلویه و بویراحمد'] ,
        ['id'=>'24','ostan'=> 'گلستان'] ,
        ['id'=>'25','ostan'=> 'گیلان'] ,
        ['id'=>'26','ostan'=> 'لرستان'] ,
        ['id'=>'27','ostan'=> 'مازندران'] ,
        ['id'=>'28','ostan'=> 'مركزی'] ,
        ['id'=>'29','ostan'=> 'هرمزگان'] ,
        ['id'=>'30','ostan'=> 'همدان'] ,
        ['id'=>'31','ostan'=> 'یزد'] ,
        
        ]);
    }
}
