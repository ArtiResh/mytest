<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

//use App\News;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(NewsTableSeeder::class);

        Model::reguard();
    }

}

class NewsTableSeeder extends DatabaseSeeder
{

    public function run()
    {
        DB::table('news')->delete();
        $news = array([
            'title' => 'Чешские спецслужбы пожаловались на "крайне высокое" число российских шпионов',
            'text_news' => '<p>ФСБ РФ проводит масштабную операцию на территории России по выявлению источников финансирования и вербовки бойцов для «Исламского государства» в Сирии.</p>
							<p>В рамках операции, сообщили источники в правоохранительных органах, с середины октября сотрудники спецслужбы задержали несколько десятков подозреваемых, в том числе и на территории Москвы». «Аналогичные операции проведены и в ряде других регионов России, мероприятия еще продолжаются», — заявили представители правоохранительных органов.</p>
							<p>В середине октября 2014 года «Аргументы недели» сообщали, что российские спецслужбы и правоохранительные органы получили задание усилить агентурную разработку ячеек «Исламского государства» в РФ. Кроме того, им поручили активизировать действия по отслеживанию и задержанию боевиков, возвращающихся из Сирии, где они воевали на стороне исламистов.</p>',
            'created_at' => '2015-06-04 10:34:51'
        ],
            [
                'title' => 'Депутатов Госдумы обязали сдать дипломатические паспорта',
                'text_news' => "	<p>Председатель Госдумы Сергей Нарышкин поручил руководителям думских фракций собрать с депутатов дипломатические паспорта. Документы решили забрать из-за «ухудшения отношений» с Евросоюзом и санкций со стороны западных стран.</p>
							<p>По правилам, депутаты должны сдавать диппаспорта после каждой служебной поездки. В действительности они хранят их у себя и зачастую используют для личных поездок без виз в страны <a href='' target='_blank'>Шенгенского соглашения.</a></p>
							<p>Депутаты должны сдать дипломатические паспорта до 31 октября.</p>",
                'created_at' => '2015-07-04 10:54:51'
            ],
            [
                'title' => 'Чешские спецслужбы пожаловались на "крайне высокое" число российских шпионов',
                'text_news' => '<p>ФСБ РФ проводит масштабную операцию на территории России по выявлению источников финансирования и вербовки бойцов для «Исламского государства» в Сирии.</p>
							<p>В рамках операции, сообщили источники в правоохранительных органах, с середины октября сотрудники спецслужбы задержали несколько десятков подозреваемых, в том числе и на территории Москвы». «Аналогичные операции проведены и в ряде других регионов России, мероприятия еще продолжаются», — заявили представители правоохранительных органов.</p>
							<p>В середине октября 2014 года «Аргументы недели» сообщали, что российские спецслужбы и правоохранительные органы получили задание усилить агентурную разработку ячеек «Исламского государства» в РФ. Кроме того, им поручили активизировать действия по отслеживанию и задержанию боевиков, возвращающихся из Сирии, где они воевали на стороне исламистов.</p>',
                'created_at' => '2015-08-04 10:34:51'
            ],
            [
                'title' => 'Депутатов Госдумы обязали сдать дипломатические паспорта',
                'text_news' => "<p>Председатель Госдумы Сергей Нарышкин поручил руководителям думских фракций собрать с депутатов дипломатические паспорта. Документы решили забрать из-за «ухудшения отношений» с Евросоюзом и санкций со стороны западных стран.</p>
							<p>По правилам, депутаты должны сдавать диппаспорта после каждой служебной поездки. В действительности они хранят их у себя и зачастую используют для личных поездок без виз в страны <a href='' target='_blank'>Шенгенского соглашения.</a></p>
							<p>Депутаты должны сдать дипломатические паспорта до 31 октября.</p>",
                'created_at' => '2015-08-14 10:34:51'
            ],
            [
                'title' => 'Чешские спецслужбы пожаловались на "крайне высокое" число российских шпионов',
                'text_news' => '<p>ФСБ РФ проводит масштабную операцию на территории России по выявлению источников финансирования и вербовки бойцов для «Исламского государства» в Сирии.</p>
							<p>В рамках операции, сообщили источники в правоохранительных органах, с середины октября сотрудники спецслужбы задержали несколько десятков подозреваемых, в том числе и на территории Москвы». «Аналогичные операции проведены и в ряде других регионов России, мероприятия еще продолжаются», — заявили представители правоохранительных органов.</p>
							<p>В середине октября 2014 года «Аргументы недели» сообщали, что российские спецслужбы и правоохранительные органы получили задание усилить агентурную разработку ячеек «Исламского государства» в РФ. Кроме того, им поручили активизировать действия по отслеживанию и задержанию боевиков, возвращающихся из Сирии, где они воевали на стороне исламистов.</p>',
                'created_at' => '2015-08-24 10:34:51'
            ],
            [
                'title' => 'Депутатов Госдумы обязали сдать дипломатические паспорта',
                'text_news' => "<p>Председатель Госдумы Сергей Нарышкин поручил руководителям думских фракций собрать с депутатов дипломатические паспорта. Документы решили забрать из-за «ухудшения отношений» с Евросоюзом и санкций со стороны западных стран.</p>
							<p>По правилам, депутаты должны сдавать диппаспорта после каждой служебной поездки. В действительности они хранят их у себя и зачастую используют для личных поездок без виз в страны <a href='' target='_blank'>Шенгенского соглашения.</a></p>
							<p>Депутаты должны сдать дипломатические паспорта до 31 октября.</p>",
                'created_at' => '2015-08-30 10:34:51'
            ],
            [
                'title' => 'Чешские спецслужбы пожаловались на "крайне высокое" число российских шпионов',
                'text_news' => '<p>ФСБ РФ проводит масштабную операцию на территории России по выявлению источников финансирования и вербовки бойцов для «Исламского государства» в Сирии.</p>
							<p>В рамках операции, сообщили источники в правоохранительных органах, с середины октября сотрудники спецслужбы задержали несколько десятков подозреваемых, в том числе и на территории Москвы». «Аналогичные операции проведены и в ряде других регионов России, мероприятия еще продолжаются», — заявили представители правоохранительных органов.</p>
							<p>В середине октября 2014 года «Аргументы недели» сообщали, что российские спецслужбы и правоохранительные органы получили задание усилить агентурную разработку ячеек «Исламского государства» в РФ. Кроме того, им поручили активизировать действия по отслеживанию и задержанию боевиков, возвращающихся из Сирии, где они воевали на стороне исламистов.</p>',
                'created_at' => '2015-09-02 10:34:51'
            ],
            [
                'title' => 'Депутатов Госдумы обязали сдать дипломатические паспорта',
                'text_news' => "	<p>Председатель Госдумы Сергей Нарышкин поручил руководителям думских фракций собрать с депутатов дипломатические паспорта. Документы решили забрать из-за «ухудшения отношений» с Евросоюзом и санкций со стороны западных стран.</p>
							<p>По правилам, депутаты должны сдавать диппаспорта после каждой служебной поездки. В действительности они хранят их у себя и зачастую используют для личных поездок без виз в страны <a href='' target='_blank'>Шенгенского соглашения.</a></p>
							<p>Депутаты должны сдать дипломатические паспорта до 31 октября.</p>",
                'created_at' => '2015-09-03 10:34:51'
            ],
            [
                'title' => 'Чешские спецслужбы пожаловались на "крайне высокое" число российских шпионов',
                'text_news' => '<p>ФСБ РФ проводит масштабную операцию на территории России по выявлению источников финансирования и вербовки бойцов для «Исламского государства» в Сирии.</p>
							<p>В рамках операции, сообщили источники в правоохранительных органах, с середины октября сотрудники спецслужбы задержали несколько десятков подозреваемых, в том числе и на территории Москвы». «Аналогичные операции проведены и в ряде других регионов России, мероприятия еще продолжаются», — заявили представители правоохранительных органов.</p>
							<p>В середине октября 2014 года «Аргументы недели» сообщали, что российские спецслужбы и правоохранительные органы получили задание усилить агентурную разработку ячеек «Исламского государства» в РФ. Кроме того, им поручили активизировать действия по отслеживанию и задержанию боевиков, возвращающихся из Сирии, где они воевали на стороне исламистов.</p>',
                'created_at' => '2015-09-04 1:34:51'
            ],
            [
                'title' => 'Депутатов Госдумы обязали сдать дипломатические паспорта',
                'text_news' => "<p>Председатель Госдумы Сергей Нарышкин поручил руководителям думских фракций собрать с депутатов дипломатические паспорта. Документы решили забрать из-за «ухудшения отношений» с Евросоюзом и санкций со стороны западных стран.</p>
							<p>По правилам, депутаты должны сдавать диппаспорта после каждой служебной поездки. В действительности они хранят их у себя и зачастую используют для личных поездок без виз в страны <a href='' target='_blank'>Шенгенского соглашения.</a></p>
							<p>Депутаты должны сдать дипломатические паспорта до 31 октября.</p>",
                'created_at' => '2015-09-04 5:34:51'
            ],
            [
                'title' => 'Чешские спецслужбы пожаловались на "крайне высокое" число российских шпионов',
                'text_news' => '<p>ФСБ РФ проводит масштабную операцию на территории России по выявлению источников финансирования и вербовки бойцов для «Исламского государства» в Сирии.</p>
							<p>В рамках операции, сообщили источники в правоохранительных органах, с середины октября сотрудники спецслужбы задержали несколько десятков подозреваемых, в том числе и на территории Москвы». «Аналогичные операции проведены и в ряде других регионов России, мероприятия еще продолжаются», — заявили представители правоохранительных органов.</p>
							<p>В середине октября 2014 года «Аргументы недели» сообщали, что российские спецслужбы и правоохранительные органы получили задание усилить агентурную разработку ячеек «Исламского государства» в РФ. Кроме того, им поручили активизировать действия по отслеживанию и задержанию боевиков, возвращающихся из Сирии, где они воевали на стороне исламистов.</p>',
                'created_at' => '2015-09-04 6:34:51'
            ],
            [
                'title' => 'Депутатов Госдумы обязали сдать дипломатические паспорта',
                'text_news' => "<p>Председатель Госдумы Сергей Нарышкин поручил руководителям думских фракций собрать с депутатов дипломатические паспорта. Документы решили забрать из-за «ухудшения отношений» с Евросоюзом и санкций со стороны западных стран.</p>
							<p>По правилам, депутаты должны сдавать диппаспорта после каждой служебной поездки. В действительности они хранят их у себя и зачастую используют для личных поездок без виз в страны <a href='' target='_blank'>Шенгенского соглашения.</a></p>
							<p>Депутаты должны сдать дипломатические паспорта до 31 октября.</p>",
                'created_at' => '2015-09-04 7:34:51'
            ],
            [
                'title' => 'Депутатов Госдумы обязали сдать дипломатические паспорта',
                'text_news' => "	<p>Председатель Госдумы Сергей Нарышкин поручил руководителям думских фракций собрать с депутатов дипломатические паспорта. Документы решили забрать из-за «ухудшения отношений» с Евросоюзом и санкций со стороны западных стран.</p>
							<p>По правилам, депутаты должны сдавать диппаспорта после каждой служебной поездки. В действительности они хранят их у себя и зачастую используют для личных поездок без виз в страны <a href='' target='_blank'>Шенгенского соглашения.</a></p>
							<p>Депутаты должны сдать дипломатические паспорта до 31 октября.</p>",
                'created_at' => '2015-09-04 8:34:51'
            ],
            [
                'title' => 'Чешские спецслужбы пожаловались на "крайне высокое" число российских шпионов',
                'text_news' => '<p>ФСБ РФ проводит масштабную операцию на территории России по выявлению источников финансирования и вербовки бойцов для «Исламского государства» в Сирии.</p>
							<p>В рамках операции, сообщили источники в правоохранительных органах, с середины октября сотрудники спецслужбы задержали несколько десятков подозреваемых, в том числе и на территории Москвы». «Аналогичные операции проведены и в ряде других регионов России, мероприятия еще продолжаются», — заявили представители правоохранительных органов.</p>
							<p>В середине октября 2014 года «Аргументы недели» сообщали, что российские спецслужбы и правоохранительные органы получили задание усилить агентурную разработку ячеек «Исламского государства» в РФ. Кроме того, им поручили активизировать действия по отслеживанию и задержанию боевиков, возвращающихся из Сирии, где они воевали на стороне исламистов.</p>',
                'created_at' => '2015-09-04 9:04:51'
            ],
            [
                'title' => 'Депутатов Госдумы обязали сдать дипломатические паспорта',
                'text_news' => "<p>Председатель Госдумы Сергей Нарышкин поручил руководителям думских фракций собрать с депутатов дипломатические паспорта. Документы решили забрать из-за «ухудшения отношений» с Евросоюзом и санкций со стороны западных стран.</p>
							<p>По правилам, депутаты должны сдавать диппаспорта после каждой служебной поездки. В действительности они хранят их у себя и зачастую используют для личных поездок без виз в страны <a href='' target='_blank'>Шенгенского соглашения.</a></p>
							<p>Депутаты должны сдать дипломатические паспорта до 31 октября.</p>",
                'created_at' => '2015-09-04 10:04:51'
            ],
            [
                'title' => 'Чешские спецслужбы пожаловались на "крайне высокое" число российских шпионов',
                'text_news' => '<p>ФСБ РФ проводит масштабную операцию на территории России по выявлению источников финансирования и вербовки бойцов для «Исламского государства» в Сирии.</p>
							<p>В рамках операции, сообщили источники в правоохранительных органах, с середины октября сотрудники спецслужбы задержали несколько десятков подозреваемых, в том числе и на территории Москвы». «Аналогичные операции проведены и в ряде других регионов России, мероприятия еще продолжаются», — заявили представители правоохранительных органов.</p>
							<p>В середине октября 2014 года «Аргументы недели» сообщали, что российские спецслужбы и правоохранительные органы получили задание усилить агентурную разработку ячеек «Исламского государства» в РФ. Кроме того, им поручили активизировать действия по отслеживанию и задержанию боевиков, возвращающихся из Сирии, где они воевали на стороне исламистов.</p>',
                'created_at' => '2015-09-04 10:34:51'
            ],
            [
                'title' => 'Депутатов Госдумы обязали сдать дипломатические паспорта',
                'text_news' => "<p>Председатель Госдумы Сергей Нарышкин поручил руководителям думских фракций собрать с депутатов дипломатические паспорта. Документы решили забрать из-за «ухудшения отношений» с Евросоюзом и санкций со стороны западных стран.</p>
							<p>По правилам, депутаты должны сдавать диппаспорта после каждой служебной поездки. В действительности они хранят их у себя и зачастую используют для личных поездок без виз в страны <a href='' target='_blank'>Шенгенского соглашения.</a></p>
							<p>Депутаты должны сдать дипломатические паспорта до 31 октября.</p>",
                'created_at' => '2015-09-04 14:34:51'
            ]);

        DB::table('news')->insert($news);
    }
}
