<?php

namespace Database\Seeders;

use App\Models\Prefecture;
use Illuminate\Database\Seeder;

use Carbon\Carbon;

class PrefectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();

        // id: 1
        Prefecture::insert([
            'kanji' => '北海道',
            'kana' => 'ほっかいどう',
            'romaji' => 'hokkaidou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 2
        Prefecture::insert([
            'kanji' => '青森県',
            'kana' => 'あおもりけん',
            'romaji' => 'aomoriken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 3
        Prefecture::insert([
            'kanji' => '岩手県',
            'kana' => 'いわてけん',
            'romaji' => 'iwateken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 4
        Prefecture::insert([
            'kanji' => '宮城県',
            'kana' => 'みやぎけん',
            'romaji' => 'miyagiken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 5
        Prefecture::insert([
            'kanji' => '秋田県',
            'kana' => 'あきたけん',
            'romaji' => 'akitaken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 6
        Prefecture::insert([
            'kanji' => '山形県',
            'kana' => 'やまがたけん',
            'romaji' => 'yamagataken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 7
        Prefecture::insert([
            'kanji' => '福島県',
            'kana' => 'ふくしまけん',
            'romaji' => 'fukushimaken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 8
        Prefecture::insert([
            'kanji' => '茨城県',
            'kana' => 'いばらきけん',
            'romaji' => 'ibarakiken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 9
        Prefecture::insert([
            'kanji' => '栃木県',
            'kana' => 'とちぎけん',
            'romaji' => 'tochigiken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 10
        Prefecture::insert([
            'kanji' => '群馬県',
            'kana' => 'ぐんまけん',
            'romaji' => 'gunmaken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 11
        Prefecture::insert([
            'kanji' => '埼玉県',
            'kana' => 'さいたまけん',
            'romaji' => 'saitamaken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 12
        Prefecture::insert([
            'kanji' => '千葉県',
            'kana' => 'ちばけん',
            'romaji' => 'chibaken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 13
        Prefecture::insert([
            'kanji' => '東京都',
            'kana' => 'とうきょうと',
            'romaji' => 'toukyouto',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 14
        Prefecture::insert([
            'kanji' => '神奈川県',
            'kana' => 'かながわけん',
            'romaji' => 'kanagawaken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 15
        Prefecture::insert([
            'kanji' => '新潟県',
            'kana' => 'にいがたけん',
            'romaji' => 'niigataken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 16
        Prefecture::insert([
            'kanji' => '富山県',
            'kana' => 'とやまけん',
            'romaji' => 'toyamaken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 17
        Prefecture::insert([
            'kanji' => '石川県',
            'kana' => 'いしかわけん',
            'romaji' => 'ishikawaken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 18
        Prefecture::insert([
            'kanji' => '福井県',
            'kana' => 'ふくいけん',
            'romaji' => 'fukuiken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 19
        Prefecture::insert([
            'kanji' => '山梨県',
            'kana' => 'やまなしけん',
            'romaji' => 'yamanashiken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 20
        Prefecture::insert([
            'kanji' => '長野県',
            'kana' => 'ながのけん',
            'romaji' => 'naganoken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 21
        Prefecture::insert([
            'kanji' => '岐阜県',
            'kana' => 'ぎふけん',
            'romaji' => 'gifuken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 22
        Prefecture::insert([
            'kanji' => '静岡県',
            'kana' => 'しずおかけん',
            'romaji' => 'shizuokaken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 23
        Prefecture::insert([
            'kanji' => '愛知県',
            'kana' => 'あいちけん',
            'romaji' => 'aichiken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 24
        Prefecture::insert([
            'kanji' => '三重県',
            'kana' => 'みえけん',
            'romaji' => 'mieken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 25
        Prefecture::insert([
            'kanji' => '滋賀県',
            'kana' => 'しがけん',
            'romaji' => 'shigaken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 26
        Prefecture::insert([
            'kanji' => '京都府',
            'kana' => 'きょうとふ',
            'romaji' => 'kyoutofu',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 27
        Prefecture::insert([
            'kanji' => '大阪府',
            'kana' => 'おおさかふ',
            'romaji' => 'oosakafu',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 28
        Prefecture::insert([
            'kanji' => '兵庫県',
            'kana' => 'ひょうごけん',
            'romaji' => 'hyougoken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 29
        Prefecture::insert([
            'kanji' => '奈良県',
            'kana' => 'ならけん',
            'romaji' => 'naraken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 30
        Prefecture::insert([
            'kanji' => '和歌山県',
            'kana' => 'わかやまけん',
            'romaji' => 'wakayamaken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 31
        Prefecture::insert([
            'kanji' => '鳥取県',
            'kana' => 'とっとりけん',
            'romaji' => 'tottoriken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 32
        Prefecture::insert([
            'kanji' => '島根県',
            'kana' => 'しまねけん',
            'romaji' => 'shimaneken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 33
        Prefecture::insert([
            'kanji' => '岡山県',
            'kana' => 'おかやまけん',
            'romaji' => 'okayamaken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 34
        Prefecture::insert([
            'kanji' => '広島県',
            'kana' => 'こうしまけん',
            'romaji' => 'koushimaken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 35
        Prefecture::insert([
            'kanji' => '山口県',
            'kana' => 'やまぐちけん',
            'romaji' => 'yamaguchiken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 36
        Prefecture::insert([
            'kanji' => '徳島県',
            'kana' => 'とくしまけん',
            'romaji' => 'tokushimaken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 37
        Prefecture::insert([
            'kanji' => '香川県',
            'kana' => 'かがわけん',
            'romaji' => 'kagawaken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 38
        Prefecture::insert([
            'kanji' => '愛媛県',
            'kana' => 'えひめけん',
            'romaji' => 'ehimeken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 39
        Prefecture::insert([
            'kanji' => '高知県',
            'kana' => 'こうちけん',
            'romaji' => 'kouchiken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 40
        Prefecture::insert([
            'kanji' => '福岡県',
            'kana' => 'ふくおかけん',
            'romaji' => 'fukuokaken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 41
        Prefecture::insert([
            'kanji' => '佐賀県',
            'kana' => 'さがけん',
            'romaji' => 'sagaken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 42
        Prefecture::insert([
            'kanji' => '長崎県',
            'kana' => 'ながさきけん',
            'romaji' => 'nagasakiken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 43
        Prefecture::insert([
            'kanji' => '熊本県',
            'kana' => 'くまもとけん',
            'romaji' => 'kumamotoken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 44
        Prefecture::insert([
            'kanji' => '大分県',
            'kana' => 'おおいたけん',
            'romaji' => 'ooitaken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 45
        Prefecture::insert([
            'kanji' => '宮崎県',
            'kana' => 'みやざきけん',
            'romaji' => 'miyazakiken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 46
        Prefecture::insert([
            'kanji' => '鹿児島県',
            'kana' => 'かごしまけん',
            'romaji' => 'kagoshimaken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 47
        Prefecture::insert([
            'kanji' => '沖縄県',
            'kana' => 'おきなわけん',
            'romaji' => 'okinawaken',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
    }
}
