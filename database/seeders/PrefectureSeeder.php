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
            'romaji' => 'Hokkaidou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 2
        Prefecture::insert([
            'kanji' => '青森県',
            'kana' => 'あおもりけん',
            'romaji' => 'Aomori Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 3
        Prefecture::insert([
            'kanji' => '岩手県',
            'kana' => 'いわてけん',
            'romaji' => 'Iwate Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 4
        Prefecture::insert([
            'kanji' => '宮城県',
            'kana' => 'みやぎけん',
            'romaji' => 'Miyagi Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 5
        Prefecture::insert([
            'kanji' => '秋田県',
            'kana' => 'あきたけん',
            'romaji' => 'Akita Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 6
        Prefecture::insert([
            'kanji' => '山形県',
            'kana' => 'やまがたけん',
            'romaji' => 'Yamagata Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 7
        Prefecture::insert([
            'kanji' => '福島県',
            'kana' => 'ふくしまけん',
            'romaji' => 'Fukushima Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 8
        Prefecture::insert([
            'kanji' => '茨城県',
            'kana' => 'いばらきけん',
            'romaji' => 'Ibaraki Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 9
        Prefecture::insert([
            'kanji' => '栃木県',
            'kana' => 'とちぎけん',
            'romaji' => 'Tochigi Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 10
        Prefecture::insert([
            'kanji' => '群馬県',
            'kana' => 'ぐんまけん',
            'romaji' => 'Gunma Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 11
        Prefecture::insert([
            'kanji' => '埼玉県',
            'kana' => 'さいたまけん',
            'romaji' => 'Saitama Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 12
        Prefecture::insert([
            'kanji' => '千葉県',
            'kana' => 'ちばけん',
            'romaji' => 'Chiba Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 13
        Prefecture::insert([
            'kanji' => '東京都',
            'kana' => 'とうきょうと',
            'romaji' => 'Toukyouto',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 14
        Prefecture::insert([
            'kanji' => '神奈川県',
            'kana' => 'かながわけん',
            'romaji' => 'Kanagawa Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 15
        Prefecture::insert([
            'kanji' => '新潟県',
            'kana' => 'にいがたけん',
            'romaji' => 'Niigata Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 16
        Prefecture::insert([
            'kanji' => '富山県',
            'kana' => 'とやまけん',
            'romaji' => 'Toyama Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 17
        Prefecture::insert([
            'kanji' => '石川県',
            'kana' => 'いしかわけん',
            'romaji' => 'Ishikawa Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 18
        Prefecture::insert([
            'kanji' => '福井県',
            'kana' => 'ふくいけん',
            'romaji' => 'Fukui Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 19
        Prefecture::insert([
            'kanji' => '山梨県',
            'kana' => 'やまなしけん',
            'romaji' => 'Yamanashi Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 20
        Prefecture::insert([
            'kanji' => '長野県',
            'kana' => 'ながのけん',
            'romaji' => 'Nagano Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 21
        Prefecture::insert([
            'kanji' => '岐阜県',
            'kana' => 'ぎふけん',
            'romaji' => 'Gifu Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 22
        Prefecture::insert([
            'kanji' => '静岡県',
            'kana' => 'しずおかけん',
            'romaji' => 'Shizuoka Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 23
        Prefecture::insert([
            'kanji' => '愛知県',
            'kana' => 'あいちけん',
            'romaji' => 'Aichi Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 24
        Prefecture::insert([
            'kanji' => '三重県',
            'kana' => 'みえけん',
            'romaji' => 'Mie Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 25
        Prefecture::insert([
            'kanji' => '滋賀県',
            'kana' => 'しがけん',
            'romaji' => 'Shiga Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 26
        Prefecture::insert([
            'kanji' => '京都府',
            'kana' => 'きょうとふ',
            'romaji' => 'Kyoutofu',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 27
        Prefecture::insert([
            'kanji' => '大阪府',
            'kana' => 'おおさかふ',
            'romaji' => 'Oosakafu',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 28
        Prefecture::insert([
            'kanji' => '兵庫県',
            'kana' => 'ひょうごけん',
            'romaji' => 'Hyougo Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 29
        Prefecture::insert([
            'kanji' => '奈良県',
            'kana' => 'ならけん',
            'romaji' => 'Nara Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 30
        Prefecture::insert([
            'kanji' => '和歌山県',
            'kana' => 'わかやまけん',
            'romaji' => 'Wakayama Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 31
        Prefecture::insert([
            'kanji' => '鳥取県',
            'kana' => 'とっとりけん',
            'romaji' => 'Tottori Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 32
        Prefecture::insert([
            'kanji' => '島根県',
            'kana' => 'しまねけん',
            'romaji' => 'Shimane Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 33
        Prefecture::insert([
            'kanji' => '岡山県',
            'kana' => 'おかやまけん',
            'romaji' => 'Okayama Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 34
        Prefecture::insert([
            'kanji' => '広島県',
            'kana' => 'こうしまけん',
            'romaji' => 'Koushima Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 35
        Prefecture::insert([
            'kanji' => '山口県',
            'kana' => 'やまぐちけん',
            'romaji' => 'Yamaguchi Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 36
        Prefecture::insert([
            'kanji' => '徳島県',
            'kana' => 'とくしまけん',
            'romaji' => 'Tokushima Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 37
        Prefecture::insert([
            'kanji' => '香川県',
            'kana' => 'かがわけん',
            'romaji' => 'Kagawa Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 38
        Prefecture::insert([
            'kanji' => '愛媛県',
            'kana' => 'えひめけん',
            'romaji' => 'Ehime Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 39
        Prefecture::insert([
            'kanji' => '高知県',
            'kana' => 'こうちけん',
            'romaji' => 'Kouchi Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 40
        Prefecture::insert([
            'kanji' => '福岡県',
            'kana' => 'ふくおかけん',
            'romaji' => 'Fukuoka Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 41
        Prefecture::insert([
            'kanji' => '佐賀県',
            'kana' => 'さがけん',
            'romaji' => 'Saga Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 42
        Prefecture::insert([
            'kanji' => '長崎県',
            'kana' => 'ながさきけん',
            'romaji' => 'Nagasaki Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 43
        Prefecture::insert([
            'kanji' => '熊本県',
            'kana' => 'くまもとけん',
            'romaji' => 'Kumamoto Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 44
        Prefecture::insert([
            'kanji' => '大分県',
            'kana' => 'おおいたけん',
            'romaji' => 'Ooita Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 45
        Prefecture::insert([
            'kanji' => '宮崎県',
            'kana' => 'みやざきけん',
            'romaji' => 'Miyazaki Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 46
        Prefecture::insert([
            'kanji' => '鹿児島県',
            'kana' => 'かごしまけん',
            'romaji' => 'Kagoshima Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 47
        Prefecture::insert([
            'kanji' => '沖縄県',
            'kana' => 'おきなわけん',
            'romaji' => 'Okinawa Prefecture',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
    }
}
