<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

use Carbon\Carbon;

class CitySeeder extends Seeder
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
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '愛別町',
            'kana' => 'あいべつちょう',
            'romaji' => 'aibetsuchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 2
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '赤平市',
            'kana' => 'あかびらし',
            'romaji' => 'akabirashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 3
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '旭川市',
            'kana' => 'あさひかわし',
            'romaji' => 'asahikawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 4
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '芦別市',
            'kana' => 'あしべつし',
            'romaji' => 'ashibetsushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 5
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '厚岸町',
            'kana' => 'あっけしちょう',
            'romaji' => 'akkeshichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 6
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '厚真町',
            'kana' => 'あつまちょう',
            'romaji' => 'atsumachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 7
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '網走市',
            'kana' => 'あばしりし',
            'romaji' => 'abashirishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 8
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '安平町',
            'kana' => 'あびらちょう',
            'romaji' => 'abirachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 9
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '池田町',
            'kana' => 'いけだちょう',
            'romaji' => 'ikedachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 10
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '岩見沢市',
            'kana' => 'いわみざわし',
            'romaji' => 'iwamizawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 11
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '浦河町',
            'kana' => 'うらかわちょう',
            'romaji' => 'urakawachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 12
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '浦幌町',
            'kana' => 'うらほろちょう',
            'romaji' => 'urahorochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 13
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '恵庭市',
            'kana' => 'えにわし',
            'romaji' => 'eniwashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 14
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '江別市',
            'kana' => 'えべつし',
            'romaji' => 'ebetsushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 15
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '遠軽町',
            'kana' => 'えんがるちょう',
            'romaji' => 'engaruchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 16
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '大空町',
            'kana' => 'おおぞらちょう',
            'romaji' => 'oozorachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 17
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '長万部町',
            'kana' => 'おしゃまんべちょう',
            'romaji' => 'oshamanbechou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 18
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '小樽市',
            'kana' => 'おたるし',
            'romaji' => 'otarushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 19
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '音威子府村',
            'kana' => 'おといねっぷむら',
            'romaji' => 'otoineppumura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 20
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '帯広市',
            'kana' => 'おびひろし',
            'romaji' => 'obihiroshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 21
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '上川町',
            'kana' => 'かみかわちょう',
            'romaji' => 'kamikawachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 22
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '上富良野町',
            'kana' => 'かみふらのちょう',
            'romaji' => 'kamifuranochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 23
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '木古内町',
            'kana' => 'きこないちょう',
            'romaji' => 'kikonaichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 24
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '北広島市',
            'kana' => 'きたひろしまし',
            'romaji' => 'kitahiroshimashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 25
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '北見市',
            'kana' => 'きたみし',
            'romaji' => 'kitamishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 26
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '共和町',
            'kana' => 'きょうわちょう',
            'romaji' => 'kyouwachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 27
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '清里町',
            'kana' => 'きよさとちょう',
            'romaji' => 'kiyosatochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 28
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '釧路市',
            'kana' => 'くしろし',
            'romaji' => 'kushiroshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 29
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '釧路町',
            'kana' => 'くしろちょう',
            'romaji' => 'kushirochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 30
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '倶知安町',
            'kana' => 'くっちゃんちょう',
            'romaji' => 'kutchanchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 31
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '栗山町',
            'kana' => 'くりやまちょう',
            'romaji' => 'kuriyamachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 32
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '黒松内町',
            'kana' => 'くろまつないちょう',
            'romaji' => 'kuromatsunaichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 33
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '剣淵町',
            'kana' => 'けんぶちちょう',
            'romaji' => 'kenbuchichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 34
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '小清水町',
            'kana' => 'こしみずちょう',
            'romaji' => 'koshimizuchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 35
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '札幌市',
            'kana' => 'さっぽろし',
            'romaji' => 'sapporoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 36
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '様似町',
            'kana' => 'さまにちょう',
            'romaji' => 'samanichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 37
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '鹿部町',
            'kana' => 'しかべちょう',
            'romaji' => 'shikabechou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 38
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '標茶町',
            'kana' => 'しべちゃちょう',
            'romaji' => 'shibechachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 39
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '士別市',
            'kana' => 'しべつし',
            'romaji' => 'shibetsushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 40
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '清水町',
            'kana' => 'しみずちょう',
            'romaji' => 'shimizuchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 41
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '占冠村',
            'kana' => 'しむかっぷむら',
            'romaji' => 'shimukappumura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 42
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '斜里町',
            'kana' => 'しゃりちょう',
            'romaji' => 'sharichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 43
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '白老町',
            'kana' => 'しらおいちょう',
            'romaji' => 'shiraoichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 44
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '白糠町',
            'kana' => 'しらぬかちょう',
            'romaji' => 'shiranukachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 45
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '新得町',
            'kana' => 'しんとくちょう',
            'romaji' => 'shintokuchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 46
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '新ひだか町',
            'kana' => 'しんひだかちょう',
            'romaji' => 'shinhidakachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 47
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '砂川市',
            'kana' => 'すながわし',
            'romaji' => 'sunagawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 48
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '滝川市',
            'kana' => 'たきかわし',
            'romaji' => 'takikawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 49
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '伊達市',
            'kana' => 'だてし',
            'romaji' => 'dateshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 50
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '秩父別町',
            'kana' => 'ちっぷべつちょう',
            'romaji' => 'chippubetsuchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 51
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '千歳市',
            'kana' => 'ちとせし',
            'romaji' => 'chitoseshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 52
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '弟子屈町',
            'kana' => 'てしかがちょう',
            'romaji' => 'teshikagachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 53
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '当別町',
            'kana' => 'とうべつちょう',
            'romaji' => 'toubetsuchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 54
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '当麻町',
            'kana' => 'とうまちょう',
            'romaji' => 'toumachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 55
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '洞爺湖町',
            'kana' => 'とうやこちょう',
            'romaji' => 'touyakochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 56
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '苫小牧市',
            'kana' => 'とまこまいし',
            'romaji' => 'tomakomaishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 57
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '豊浦町',
            'kana' => 'とようらちょう',
            'romaji' => 'toyourachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 58
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '豊頃町',
            'kana' => 'とよころちょう',
            'romaji' => 'toyokorochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 59
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '豊富町',
            'kana' => 'とよとみちょう',
            'romaji' => 'toyotomichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 60
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '奈井江町',
            'kana' => 'ないえちょう',
            'romaji' => 'naiechou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 61
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '中川町',
            'kana' => 'なかがわちょう',
            'romaji' => 'nakagawachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 62
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '中富良野町',
            'kana' => 'なかふらのちょう',
            'romaji' => 'nakafuranochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 63
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '七飯町',
            'kana' => 'ななえちょう',
            'romaji' => 'nanaechou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 64
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '名寄市',
            'kana' => 'なよろし',
            'romaji' => 'nayoroshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 65
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '新冠町',
            'kana' => 'にいかっぷちょう',
            'romaji' => 'niikappuchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 66
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '仁木町',
            'kana' => 'にきちょう',
            'romaji' => 'nikichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 67
        City::insert([
            'prefecture_id' => '1',
            'kanji' => 'ニセコ町',
            'kana' => 'にせこちょう',
            'romaji' => 'nisekochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 68
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '沼田町',
            'kana' => 'ぬまたちょう',
            'romaji' => 'numatachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 69
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '根室市',
            'kana' => 'ねむろし',
            'romaji' => 'nemuroshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 70
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '登別市',
            'kana' => 'のぼりべつし',
            'romaji' => 'noboribetsushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 71
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '函館市',
            'kana' => 'はこだてし',
            'romaji' => 'hakodateshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 72
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '浜中町',
            'kana' => 'はまなかちょう',
            'romaji' => 'hamanakachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 73
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '美瑛町',
            'kana' => 'びえいちょう',
            'romaji' => 'bieichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 74
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '日高町',
            'kana' => 'ひだかちょう',
            'romaji' => 'hidakachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 75
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '比布町',
            'kana' => 'ぴっぷちょう',
            'romaji' => 'pippuchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 76
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '美唄市',
            'kana' => 'びばいし',
            'romaji' => 'bibaishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 77
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '美深町',
            'kana' => 'びふかちょう',
            'romaji' => 'bifukachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 78
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '美幌町',
            'kana' => 'びほろちょう',
            'romaji' => 'bihorochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 79
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '深川市',
            'kana' => 'ふかがわし',
            'romaji' => 'fukagawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 80
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '富良野市',
            'kana' => 'ふらのし',
            'romaji' => 'furanoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 81
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '北斗市',
            'kana' => 'ほくとし',
            'romaji' => 'hokutoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 82
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '幌延町',
            'kana' => 'ほろのべちょう',
            'romaji' => 'horonobechou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 83
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '幕別町',
            'kana' => 'まくべつちょう',
            'romaji' => 'makubetsuchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 84
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '南富良野町',
            'kana' => 'みなみふらのちょう',
            'romaji' => 'minamifuranochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 85
        City::insert([
            'prefecture_id' => '1',
            'kanji' => 'むかわ町',
            'kana' => 'むかわちょう',
            'romaji' => 'mukawachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 86
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '室蘭市',
            'kana' => 'むろらんし',
            'romaji' => 'muroranshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 87
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '芽室町',
            'kana' => 'めむろちょう',
            'romaji' => 'memurochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 88
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '妹背牛町',
            'kana' => 'もせうしちょう',
            'romaji' => 'moseushichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 89
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '森町',
            'kana' => 'もりまち',
            'romaji' => 'morimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 90
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '八雲町',
            'kana' => 'やくもちょう',
            'romaji' => 'yakumochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 91
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '夕張市',
            'kana' => 'ゆうばりし',
            'romaji' => 'yuubarishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 92
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '由仁町',
            'kana' => 'ゆにちょう',
            'romaji' => 'yunichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 93
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '余市町',
            'kana' => 'よいちちょう',
            'romaji' => 'yoichichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 94
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '蘭越町',
            'kana' => 'らんこしちょう',
            'romaji' => 'rankoshichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 95
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '留萌市',
            'kana' => 'るもいし',
            'romaji' => 'rumoishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 96
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '稚内市',
            'kana' => 'わっかないし',
            'romaji' => 'wakkanaishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 97
        City::insert([
            'prefecture_id' => '1',
            'kanji' => '和寒町',
            'kana' => 'わっさむちょう',
            'romaji' => 'wassamuchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 98
        City::insert([
            'prefecture_id' => '2',
            'kanji' => '青森市',
            'kana' => 'あおもりし',
            'romaji' => 'aomorishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 99
        City::insert([
            'prefecture_id' => '2',
            'kanji' => '鰺ヶ沢町',
            'kana' => 'あじがさわまち',
            'romaji' => 'ajigasawamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 100
        City::insert([
            'prefecture_id' => '2',
            'kanji' => '板柳町',
            'kana' => 'いたやなぎまち',
            'romaji' => 'itayanagimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 101
        City::insert([
            'prefecture_id' => '2',
            'kanji' => '田舎館村',
            'kana' => 'いなかだてむら',
            'romaji' => 'inakadatemura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 102
        City::insert([
            'prefecture_id' => '2',
            'kanji' => '今別町',
            'kana' => 'いまべつまち',
            'romaji' => 'imabetsumachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 103
        City::insert([
            'prefecture_id' => '2',
            'kanji' => '大鰐町',
            'kana' => 'おおわにまち',
            'romaji' => 'oowanimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 104
        City::insert([
            'prefecture_id' => '2',
            'kanji' => '五所川原市',
            'kana' => 'ごしょがわらし',
            'romaji' => 'goshogawarashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 105
        City::insert([
            'prefecture_id' => '2',
            'kanji' => '七戸町',
            'kana' => 'しちのへまち',
            'romaji' => 'shichinohemachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 106
        City::insert([
            'prefecture_id' => '2',
            'kanji' => '外ヶ浜町',
            'kana' => 'そとがはままち',
            'romaji' => 'sotogahamamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 107
        City::insert([
            'prefecture_id' => '2',
            'kanji' => 'つがる市',
            'kana' => 'つがるし',
            'romaji' => 'tsugarushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 108
        City::insert([
            'prefecture_id' => '2',
            'kanji' => '鶴田町',
            'kana' => 'つるたまち',
            'romaji' => 'tsurutamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 109
        City::insert([
            'prefecture_id' => '2',
            'kanji' => '野辺地町',
            'kana' => 'のへじまち',
            'romaji' => 'nohejimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 110
        City::insert([
            'prefecture_id' => '2',
            'kanji' => '階上町',
            'kana' => 'はしかみちょう',
            'romaji' => 'hashikamichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 111
        City::insert([
            'prefecture_id' => '2',
            'kanji' => '八戸市',
            'kana' => 'はちのへし',
            'romaji' => 'hachinoheshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 112
        City::insert([
            'prefecture_id' => '2',
            'kanji' => '平川市',
            'kana' => 'ひらかわし',
            'romaji' => 'hirakawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 113
        City::insert([
            'prefecture_id' => '2',
            'kanji' => '弘前市',
            'kana' => 'ひろさきし',
            'romaji' => 'hirosakishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 114
        City::insert([
            'prefecture_id' => '2',
            'kanji' => '深浦町',
            'kana' => 'ふかうらまち',
            'romaji' => 'fukauramachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 115
        City::insert([
            'prefecture_id' => '2',
            'kanji' => '藤崎町',
            'kana' => 'ふじさきまち',
            'romaji' => 'fujisakimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 116
        City::insert([
            'prefecture_id' => '2',
            'kanji' => 'むつ市',
            'kana' => 'むつし',
            'romaji' => 'mutsushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 117
        City::insert([
            'prefecture_id' => '2',
            'kanji' => '横浜町',
            'kana' => 'よこはままち',
            'romaji' => 'yokohamamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 118
        City::insert([
            'prefecture_id' => '2',
            'kanji' => '蓬田村',
            'kana' => 'よもぎたむら',
            'romaji' => 'yomogitamura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 119
        City::insert([
            'prefecture_id' => '3',
            'kanji' => '一関市',
            'kana' => 'いちのせきし',
            'romaji' => 'ichinosekishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 120
        City::insert([
            'prefecture_id' => '3',
            'kanji' => '岩手町',
            'kana' => 'いわてまち',
            'romaji' => 'iwatemachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 121
        City::insert([
            'prefecture_id' => '3',
            'kanji' => '奥州市',
            'kana' => 'おうしゅうし',
            'romaji' => 'oushuushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 122
        City::insert([
            'prefecture_id' => '3',
            'kanji' => '金ヶ崎町',
            'kana' => 'かねがさきちょう',
            'romaji' => 'kanegasakichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 123
        City::insert([
            'prefecture_id' => '3',
            'kanji' => '釜石市',
            'kana' => 'かまいしし',
            'romaji' => 'kamaishishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 124
        City::insert([
            'prefecture_id' => '3',
            'kanji' => '北上市',
            'kana' => 'きたかみし',
            'romaji' => 'kitakamishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 125
        City::insert([
            'prefecture_id' => '3',
            'kanji' => '久慈市',
            'kana' => 'くじし',
            'romaji' => 'kujishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 126
        City::insert([
            'prefecture_id' => '3',
            'kanji' => '雫石町',
            'kana' => 'しずくいしちょう',
            'romaji' => 'shizukuishichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 127
        City::insert([
            'prefecture_id' => '3',
            'kanji' => '紫波町',
            'kana' => 'しわちょう',
            'romaji' => 'shiwachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 128
        City::insert([
            'prefecture_id' => '3',
            'kanji' => '住田町',
            'kana' => 'すみたちょう',
            'romaji' => 'sumitachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 129
        City::insert([
            'prefecture_id' => '3',
            'kanji' => '滝沢市',
            'kana' => 'たきざわし',
            'romaji' => 'takizawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 130
        City::insert([
            'prefecture_id' => '3',
            'kanji' => '遠野市',
            'kana' => 'とおのし',
            'romaji' => 'toonoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 131
        City::insert([
            'prefecture_id' => '3',
            'kanji' => '西和賀町',
            'kana' => 'にしわがまち',
            'romaji' => 'nishiwagamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 132
        City::insert([
            'prefecture_id' => '3',
            'kanji' => '二戸市',
            'kana' => 'にのへし',
            'romaji' => 'ninoheshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 133
        City::insert([
            'prefecture_id' => '3',
            'kanji' => '八幡平市',
            'kana' => 'はちまんたいし',
            'romaji' => 'hachimantaishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 134
        City::insert([
            'prefecture_id' => '3',
            'kanji' => '花巻市',
            'kana' => 'はなまきし',
            'romaji' => 'hanamakishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 135
        City::insert([
            'prefecture_id' => '3',
            'kanji' => '平泉町',
            'kana' => 'ひらいずみちょう',
            'romaji' => 'hiraizumichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 136
        City::insert([
            'prefecture_id' => '3',
            'kanji' => '洋野町',
            'kana' => 'ひろのちょう',
            'romaji' => 'hironochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 137
        City::insert([
            'prefecture_id' => '3',
            'kanji' => '宮古市',
            'kana' => 'みやこし',
            'romaji' => 'miyakoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 138
        City::insert([
            'prefecture_id' => '3',
            'kanji' => '盛岡市',
            'kana' => 'もりおかし',
            'romaji' => 'moriokashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 139
        City::insert([
            'prefecture_id' => '3',
            'kanji' => '矢巾町',
            'kana' => 'やはばちょう',
            'romaji' => 'yahabachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 140
        City::insert([
            'prefecture_id' => '4',
            'kanji' => '石巻市',
            'kana' => 'いしのまきし',
            'romaji' => 'ishinomakishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 141
        City::insert([
            'prefecture_id' => '4',
            'kanji' => '岩沼市',
            'kana' => 'いわぬまし',
            'romaji' => 'iwanumashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 142
        City::insert([
            'prefecture_id' => '4',
            'kanji' => '大河原町',
            'kana' => 'おおがわらまち',
            'romaji' => 'oogawaramachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 143
        City::insert([
            'prefecture_id' => '4',
            'kanji' => '大崎市',
            'kana' => 'おおさきし',
            'romaji' => 'oosakishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 144
        City::insert([
            'prefecture_id' => '4',
            'kanji' => '女川町',
            'kana' => 'おながわちょう',
            'romaji' => 'onagawachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 145
        City::insert([
            'prefecture_id' => '4',
            'kanji' => '栗原市',
            'kana' => 'くりはらし',
            'romaji' => 'kuriharashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 146
        City::insert([
            'prefecture_id' => '4',
            'kanji' => '気仙沼市',
            'kana' => 'けせんぬまし',
            'romaji' => 'kesennumashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 147
        City::insert([
            'prefecture_id' => '4',
            'kanji' => '塩竈市',
            'kana' => 'しおがまし',
            'romaji' => 'shiogamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 148
        City::insert([
            'prefecture_id' => '4',
            'kanji' => '柴田町',
            'kana' => 'しばたまち',
            'romaji' => 'shibatamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 149
        City::insert([
            'prefecture_id' => '4',
            'kanji' => '白石市',
            'kana' => 'しろいしし',
            'romaji' => 'shiroishishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 150
        City::insert([
            'prefecture_id' => '4',
            'kanji' => '仙台市',
            'kana' => 'せんだいし',
            'romaji' => 'sendaishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 151
        City::insert([
            'prefecture_id' => '4',
            'kanji' => '多賀城市',
            'kana' => 'たがじょうし',
            'romaji' => 'tagajoushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 152
        City::insert([
            'prefecture_id' => '4',
            'kanji' => '登米市',
            'kana' => 'とめし',
            'romaji' => 'tomeshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 153
        City::insert([
            'prefecture_id' => '4',
            'kanji' => '名取市',
            'kana' => 'なとりし',
            'romaji' => 'natorishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 154
        City::insert([
            'prefecture_id' => '4',
            'kanji' => '東松島市',
            'kana' => 'ひがしまつしまし',
            'romaji' => 'higashimatsushimashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 155
        City::insert([
            'prefecture_id' => '4',
            'kanji' => '松島町',
            'kana' => 'まつしままち',
            'romaji' => 'matsushimamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 156
        City::insert([
            'prefecture_id' => '4',
            'kanji' => '美里町',
            'kana' => 'みさとまち',
            'romaji' => 'misatomachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 157
        City::insert([
            'prefecture_id' => '4',
            'kanji' => '山元町',
            'kana' => 'やまもとちょう',
            'romaji' => 'yamamotochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 158
        City::insert([
            'prefecture_id' => '4',
            'kanji' => '利府町',
            'kana' => 'りふちょう',
            'romaji' => 'rifuchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 159
        City::insert([
            'prefecture_id' => '4',
            'kanji' => '涌谷町',
            'kana' => 'わくやちょう',
            'romaji' => 'wakuyachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 160
        City::insert([
            'prefecture_id' => '4',
            'kanji' => '亘理町',
            'kana' => 'わたりちょう',
            'romaji' => 'watarichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 161
        City::insert([
            'prefecture_id' => '5',
            'kanji' => '秋田市',
            'kana' => 'あきたし',
            'romaji' => 'akitashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 162
        City::insert([
            'prefecture_id' => '5',
            'kanji' => '井川町',
            'kana' => 'いかわまち',
            'romaji' => 'ikawamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 163
        City::insert([
            'prefecture_id' => '5',
            'kanji' => '大館市',
            'kana' => 'おおだてし',
            'romaji' => 'oodateshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 164
        City::insert([
            'prefecture_id' => '5',
            'kanji' => '男鹿市',
            'kana' => 'おがし',
            'romaji' => 'ogashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 165
        City::insert([
            'prefecture_id' => '5',
            'kanji' => '潟上市',
            'kana' => 'かたがみし',
            'romaji' => 'katagamishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 166
        City::insert([
            'prefecture_id' => '5',
            'kanji' => '鹿角市',
            'kana' => 'かづのし',
            'romaji' => 'kazunoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 167
        City::insert([
            'prefecture_id' => '5',
            'kanji' => '北秋田市',
            'kana' => 'きたあきたし',
            'romaji' => 'kitaakitashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 168
        City::insert([
            'prefecture_id' => '5',
            'kanji' => '仙北市',
            'kana' => 'せんぼくし',
            'romaji' => 'senbokushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 169
        City::insert([
            'prefecture_id' => '5',
            'kanji' => '大仙市',
            'kana' => 'だいせんし',
            'romaji' => 'daisenshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 170
        City::insert([
            'prefecture_id' => '5',
            'kanji' => 'にかほ市',
            'kana' => 'にかほし',
            'romaji' => 'nikahoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 171
        City::insert([
            'prefecture_id' => '5',
            'kanji' => '能代市',
            'kana' => 'のしろし',
            'romaji' => 'noshiroshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 172
        City::insert([
            'prefecture_id' => '5',
            'kanji' => '八郎潟町',
            'kana' => 'はちろうがたまち',
            'romaji' => 'hachirougatamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 173
        City::insert([
            'prefecture_id' => '5',
            'kanji' => '八峰町',
            'kana' => 'はっぽうちょう',
            'romaji' => 'happouchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 174
        City::insert([
            'prefecture_id' => '5',
            'kanji' => '美郷町',
            'kana' => 'みさとちょう',
            'romaji' => 'misatochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 175
        City::insert([
            'prefecture_id' => '5',
            'kanji' => '三種町',
            'kana' => 'みたねちょう',
            'romaji' => 'mitanechou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 176
        City::insert([
            'prefecture_id' => '5',
            'kanji' => '湯沢市',
            'kana' => 'ゆざわし',
            'romaji' => 'yuzawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 177
        City::insert([
            'prefecture_id' => '5',
            'kanji' => '由利本荘市',
            'kana' => 'ゆりほんじょうし',
            'romaji' => 'yurihonjoushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 178
        City::insert([
            'prefecture_id' => '5',
            'kanji' => '横手市',
            'kana' => 'よこてし',
            'romaji' => 'yokoteshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 179
        City::insert([
            'prefecture_id' => '6',
            'kanji' => '飯豊町',
            'kana' => 'いいでまち',
            'romaji' => 'iidemachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 180
        City::insert([
            'prefecture_id' => '6',
            'kanji' => '大石田町',
            'kana' => 'おおいしだまち',
            'romaji' => 'ooishidamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 181
        City::insert([
            'prefecture_id' => '6',
            'kanji' => '大江町',
            'kana' => 'おおえまち',
            'romaji' => 'ooemachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 182
        City::insert([
            'prefecture_id' => '6',
            'kanji' => '小国町',
            'kana' => 'おぐにまち',
            'romaji' => 'ogunimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 183
        City::insert([
            'prefecture_id' => '6',
            'kanji' => '尾花沢市',
            'kana' => 'おばなざわし',
            'romaji' => 'obanazawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 184
        City::insert([
            'prefecture_id' => '6',
            'kanji' => '上山市',
            'kana' => 'かみのやまし',
            'romaji' => 'kaminoyamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 185
        City::insert([
            'prefecture_id' => '6',
            'kanji' => '川西町',
            'kana' => 'かわにしまち',
            'romaji' => 'kawanishimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 186
        City::insert([
            'prefecture_id' => '6',
            'kanji' => '寒河江市',
            'kana' => 'さがえし',
            'romaji' => 'sagaeshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 187
        City::insert([
            'prefecture_id' => '6',
            'kanji' => '酒田市',
            'kana' => 'さかたし',
            'romaji' => 'sakatashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 188
        City::insert([
            'prefecture_id' => '6',
            'kanji' => '鮭川村',
            'kana' => 'さけがわむら',
            'romaji' => 'sakegawamura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 189
        City::insert([
            'prefecture_id' => '6',
            'kanji' => '庄内町',
            'kana' => 'しょうないまち',
            'romaji' => 'shounaimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 190
        City::insert([
            'prefecture_id' => '6',
            'kanji' => '新庄市',
            'kana' => 'しんじょうし',
            'romaji' => 'shinjoushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 191
        City::insert([
            'prefecture_id' => '6',
            'kanji' => '高畠町',
            'kana' => 'たかはたまち',
            'romaji' => 'takahatamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 192
        City::insert([
            'prefecture_id' => '6',
            'kanji' => '鶴岡市',
            'kana' => 'つるおかし',
            'romaji' => 'tsuruokashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 193
        City::insert([
            'prefecture_id' => '6',
            'kanji' => '天童市',
            'kana' => 'てんどうし',
            'romaji' => 'tendoushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 194
        City::insert([
            'prefecture_id' => '6',
            'kanji' => '戸沢村',
            'kana' => 'とざわむら',
            'romaji' => 'tozawamura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 195
        City::insert([
            'prefecture_id' => '6',
            'kanji' => '長井市',
            'kana' => 'ながいし',
            'romaji' => 'nagaishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 196
        City::insert([
            'prefecture_id' => '6',
            'kanji' => '中山町',
            'kana' => 'なかやままち',
            'romaji' => 'nakayamamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 197
        City::insert([
            'prefecture_id' => '6',
            'kanji' => '南陽市',
            'kana' => 'なんようし',
            'romaji' => 'nanyoushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 198
        City::insert([
            'prefecture_id' => '6',
            'kanji' => '東根市',
            'kana' => 'ひがしねし',
            'romaji' => 'higashineshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 199
        City::insert([
            'prefecture_id' => '6',
            'kanji' => '舟形町',
            'kana' => 'ふながたまち',
            'romaji' => 'funagatamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 200
        City::insert([
            'prefecture_id' => '6',
            'kanji' => '真室川町',
            'kana' => 'まむろがわまち',
            'romaji' => 'mamurogawamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 201
        City::insert([
            'prefecture_id' => '6',
            'kanji' => '村山市',
            'kana' => 'むらやまし',
            'romaji' => 'murayamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 202
        City::insert([
            'prefecture_id' => '6',
            'kanji' => '最上町',
            'kana' => 'もがみまち',
            'romaji' => 'mogamimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 203
        City::insert([
            'prefecture_id' => '6',
            'kanji' => '山形市',
            'kana' => 'やまがたし',
            'romaji' => 'yamagatashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 204
        City::insert([
            'prefecture_id' => '6',
            'kanji' => '山辺町',
            'kana' => 'やまのべまち',
            'romaji' => 'yamanobemachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 205
        City::insert([
            'prefecture_id' => '6',
            'kanji' => '遊佐町',
            'kana' => 'ゆざまち',
            'romaji' => 'yuzamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 206
        City::insert([
            'prefecture_id' => '6',
            'kanji' => '米沢市',
            'kana' => 'よねざわし',
            'romaji' => 'yonezawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 207
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '会津坂下町',
            'kana' => 'あいづばんげまち',
            'romaji' => 'aizubangemachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 208
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '会津美里町',
            'kana' => 'あいづみさとまち',
            'romaji' => 'aizumisatomachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 209
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '会津若松市',
            'kana' => 'あいづわかまつし',
            'romaji' => 'aizuwakamatsushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 210
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '浅川町',
            'kana' => 'あさかわまち',
            'romaji' => 'asakawamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 211
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '石川町',
            'kana' => 'いしかわまち',
            'romaji' => 'ishikawamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 212
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '泉崎村',
            'kana' => 'いずみざきむら',
            'romaji' => 'izumizakimura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 213
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '猪苗代町',
            'kana' => 'いなわしろまち',
            'romaji' => 'inawashiromachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 214
        City::insert([
            'prefecture_id' => '7',
            'kanji' => 'いわき市',
            'kana' => 'いわきし',
            'romaji' => 'iwakishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 215
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '大熊町',
            'kana' => 'おおくままち',
            'romaji' => 'ookumamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 216
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '小野町',
            'kana' => 'おのまち',
            'romaji' => 'onomachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 217
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '鏡石町',
            'kana' => 'かがみいしまち',
            'romaji' => 'kagamiishimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 218
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '金山町',
            'kana' => 'かねやままち',
            'romaji' => 'kaneyamamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 219
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '喜多方市',
            'kana' => 'きたかたし',
            'romaji' => 'kitakatashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 220
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '国見町',
            'kana' => 'くにみまち',
            'romaji' => 'kunimimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 221
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '桑折町',
            'kana' => 'こおりまち',
            'romaji' => 'koorimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 222
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '郡山市',
            'kana' => 'こおりやまし',
            'romaji' => 'kooriyamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 223
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '白河市',
            'kana' => 'しらかわし',
            'romaji' => 'shirakawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 224
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '新地町',
            'kana' => 'しんちまち',
            'romaji' => 'shinchimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 225
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '須賀川市',
            'kana' => 'すかがわし',
            'romaji' => 'sukagawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 226
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '相馬市',
            'kana' => 'そうまし',
            'romaji' => 'soumashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 227
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '只見町',
            'kana' => 'ただみまち',
            'romaji' => 'tadamimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 228
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '伊達市',
            'kana' => 'だてし',
            'romaji' => 'dateshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 229
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '棚倉町',
            'kana' => 'たなぐらまち',
            'romaji' => 'tanaguramachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 230
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '玉川村',
            'kana' => 'たまかわむら',
            'romaji' => 'tamakawamura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 231
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '田村市',
            'kana' => 'たむらし',
            'romaji' => 'tamurashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 232
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '富岡町',
            'kana' => 'とみおかまち',
            'romaji' => 'tomiokamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 233
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '浪江町',
            'kana' => 'なみえまち',
            'romaji' => 'namiemachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 234
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '楢葉町',
            'kana' => 'ならはまち',
            'romaji' => 'narahamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 235
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '西会津町',
            'kana' => 'にしあいづまち',
            'romaji' => 'nishiaizumachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 236
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '西郷村',
            'kana' => 'にしごうむら',
            'romaji' => 'nishigoumura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 237
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '二本松市',
            'kana' => 'にほんまつし',
            'romaji' => 'nihonmatsushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 238
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '塙町',
            'kana' => 'はなわまち',
            'romaji' => 'hanawamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 239
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '磐梯町',
            'kana' => 'ばんだいまち',
            'romaji' => 'bandaimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 240
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '広野町',
            'kana' => 'ひろのまち',
            'romaji' => 'hironomachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 241
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '福島市',
            'kana' => 'ふくしまし',
            'romaji' => 'fukushimashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 242
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '双葉町',
            'kana' => 'ふたばまち',
            'romaji' => 'futabamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 243
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '三島町',
            'kana' => 'みしままち',
            'romaji' => 'mishimamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 244
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '南相馬市',
            'kana' => 'みなみそうまし',
            'romaji' => 'minamisoumashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 245
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '三春町',
            'kana' => 'みはるまち',
            'romaji' => 'miharumachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 246
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '本宮市',
            'kana' => 'もとみやし',
            'romaji' => 'motomiyashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 247
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '柳津町',
            'kana' => 'やないづまち',
            'romaji' => 'yanaizumachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 248
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '矢吹町',
            'kana' => 'やぶきまち',
            'romaji' => 'yabukimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 249
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '矢祭町',
            'kana' => 'やまつりまち',
            'romaji' => 'yamatsurimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 250
        City::insert([
            'prefecture_id' => '7',
            'kanji' => '湯川村',
            'kana' => 'ゆがわむら',
            'romaji' => 'yugawamura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 251
        City::insert([
            'prefecture_id' => '8',
            'kanji' => '石岡市',
            'kana' => 'いしおかし',
            'romaji' => 'ishiokashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 252
        City::insert([
            'prefecture_id' => '8',
            'kanji' => '潮来市',
            'kana' => 'いたこし',
            'romaji' => 'itakoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 253
        City::insert([
            'prefecture_id' => '8',
            'kanji' => '牛久市',
            'kana' => 'うしくし',
            'romaji' => 'ushikushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 254
        City::insert([
            'prefecture_id' => '8',
            'kanji' => '小美玉市',
            'kana' => 'おみたまし',
            'romaji' => 'omitamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 255
        City::insert([
            'prefecture_id' => '8',
            'kanji' => '笠間市',
            'kana' => 'かさまし',
            'romaji' => 'kasamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 256
        City::insert([
            'prefecture_id' => '8',
            'kanji' => '鹿嶋市',
            'kana' => 'かしまし',
            'romaji' => 'kashimashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 257
        City::insert([
            'prefecture_id' => '8',
            'kanji' => '北茨城市',
            'kana' => 'きたいばらきし',
            'romaji' => 'kitaibarakishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 258
        City::insert([
            'prefecture_id' => '8',
            'kanji' => '古河市',
            'kana' => 'こがし',
            'romaji' => 'kogashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 259
        City::insert([
            'prefecture_id' => '8',
            'kanji' => '桜川市',
            'kana' => 'さくらがわし',
            'romaji' => 'sakuragawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 260
        City::insert([
            'prefecture_id' => '8',
            'kanji' => '大子町',
            'kana' => 'だいごまち',
            'romaji' => 'daigomachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 261
        City::insert([
            'prefecture_id' => '8',
            'kanji' => '高萩市',
            'kana' => 'たかはぎし',
            'romaji' => 'takahagishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 262
        City::insert([
            'prefecture_id' => '8',
            'kanji' => '筑西市',
            'kana' => 'ちくせいし',
            'romaji' => 'chikuseishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 263
        City::insert([
            'prefecture_id' => '8',
            'kanji' => '土浦市',
            'kana' => 'つちうらし',
            'romaji' => 'tsuchiurashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 264
        City::insert([
            'prefecture_id' => '8',
            'kanji' => '東海村',
            'kana' => 'とうかいむら',
            'romaji' => 'toukaimura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 265
        City::insert([
            'prefecture_id' => '8',
            'kanji' => '取手市',
            'kana' => 'とりでし',
            'romaji' => 'torideshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 266
        City::insert([
            'prefecture_id' => '8',
            'kanji' => '那珂市',
            'kana' => 'なかし',
            'romaji' => 'nakashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 267
        City::insert([
            'prefecture_id' => '8',
            'kanji' => '常陸太田市',
            'kana' => 'ひたちおおたし',
            'romaji' => 'hitachiootashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 268
        City::insert([
            'prefecture_id' => '8',
            'kanji' => '常陸大宮市',
            'kana' => 'ひたちおおみやし',
            'romaji' => 'hitachioomiyashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 269
        City::insert([
            'prefecture_id' => '8',
            'kanji' => '日立市',
            'kana' => 'ひたちし',
            'romaji' => 'hitachishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 270
        City::insert([
            'prefecture_id' => '8',
            'kanji' => 'ひたちなか市',
            'kana' => 'ひたちなかし',
            'romaji' => 'hitachinakashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 271
        City::insert([
            'prefecture_id' => '8',
            'kanji' => '水戸市',
            'kana' => 'みとし',
            'romaji' => 'mitoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 272
        City::insert([
            'prefecture_id' => '8',
            'kanji' => '結城市',
            'kana' => 'ゆうきし',
            'romaji' => 'yuukishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 273
        City::insert([
            'prefecture_id' => '8',
            'kanji' => '龍ケ崎市',
            'kana' => 'りゅうがさきし',
            'romaji' => 'ryuugasakishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 274
        City::insert([
            'prefecture_id' => '9',
            'kanji' => '足利市',
            'kana' => 'あしかがし',
            'romaji' => 'ashikagashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 275
        City::insert([
            'prefecture_id' => '9',
            'kanji' => '宇都宮市',
            'kana' => 'うつのみやし',
            'romaji' => 'utsunomiyashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 276
        City::insert([
            'prefecture_id' => '9',
            'kanji' => '大田原市',
            'kana' => 'おおたわらし',
            'romaji' => 'ootawarashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 277
        City::insert([
            'prefecture_id' => '9',
            'kanji' => '小山市',
            'kana' => 'おやまし',
            'romaji' => 'oyamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 278
        City::insert([
            'prefecture_id' => '9',
            'kanji' => '鹿沼市',
            'kana' => 'かぬまし',
            'romaji' => 'kanumashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 279
        City::insert([
            'prefecture_id' => '9',
            'kanji' => 'さくら市',
            'kana' => 'さくらし',
            'romaji' => 'sakurashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 280
        City::insert([
            'prefecture_id' => '9',
            'kanji' => '佐野市',
            'kana' => 'さのし',
            'romaji' => 'sanoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 281
        City::insert([
            'prefecture_id' => '9',
            'kanji' => '下野市',
            'kana' => 'しもつけし',
            'romaji' => 'shimotsukeshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 282
        City::insert([
            'prefecture_id' => '9',
            'kanji' => '高根沢町',
            'kana' => 'たかねざわまち',
            'romaji' => 'takanezawamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 283
        City::insert([
            'prefecture_id' => '9',
            'kanji' => '栃木市',
            'kana' => 'とちぎし',
            'romaji' => 'tochigishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 284
        City::insert([
            'prefecture_id' => '9',
            'kanji' => '那須烏山市',
            'kana' => 'なすからすやまし',
            'romaji' => 'nasukarasuyamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 285
        City::insert([
            'prefecture_id' => '9',
            'kanji' => '那須塩原市',
            'kana' => 'なすしおばらし',
            'romaji' => 'nasushiobarashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 286
        City::insert([
            'prefecture_id' => '9',
            'kanji' => '那須町',
            'kana' => 'なすまち',
            'romaji' => 'nasumachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 287
        City::insert([
            'prefecture_id' => '9',
            'kanji' => '日光市',
            'kana' => 'にっこうし',
            'romaji' => 'nikkoushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 288
        City::insert([
            'prefecture_id' => '9',
            'kanji' => '野木町',
            'kana' => 'のぎまち',
            'romaji' => 'nogimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 289
        City::insert([
            'prefecture_id' => '9',
            'kanji' => '矢板市',
            'kana' => 'やいたし',
            'romaji' => 'yaitashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 290
        City::insert([
            'prefecture_id' => '10',
            'kanji' => '安中市',
            'kana' => 'あんなかし',
            'romaji' => 'annakashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 291
        City::insert([
            'prefecture_id' => '10',
            'kanji' => '伊勢崎市',
            'kana' => 'いせさきし',
            'romaji' => 'isesakishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 292
        City::insert([
            'prefecture_id' => '10',
            'kanji' => '桐生市',
            'kana' => 'きりゅうし',
            'romaji' => 'kiryuushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 293
        City::insert([
            'prefecture_id' => '10',
            'kanji' => '渋川市',
            'kana' => 'しぶかわし',
            'romaji' => 'shibukawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 294
        City::insert([
            'prefecture_id' => '10',
            'kanji' => '高崎市',
            'kana' => 'たかさきし',
            'romaji' => 'takasakishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 295
        City::insert([
            'prefecture_id' => '10',
            'kanji' => '嬬恋村',
            'kana' => 'つまごいむら',
            'romaji' => 'tsumagoimura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 296
        City::insert([
            'prefecture_id' => '10',
            'kanji' => '中之条町',
            'kana' => 'なかのじょうまち',
            'romaji' => 'nakanojoumachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 297
        City::insert([
            'prefecture_id' => '10',
            'kanji' => '長野原町',
            'kana' => 'ながのはらまち',
            'romaji' => 'naganoharamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 298
        City::insert([
            'prefecture_id' => '10',
            'kanji' => '沼田市',
            'kana' => 'ぬまたし',
            'romaji' => 'numatashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 299
        City::insert([
            'prefecture_id' => '10',
            'kanji' => '東吾妻町',
            'kana' => 'ひがしあがつままち',
            'romaji' => 'higashiagatsumamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 300
        City::insert([
            'prefecture_id' => '10',
            'kanji' => '藤岡市',
            'kana' => 'ふじおかし',
            'romaji' => 'fujiokashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 301
        City::insert([
            'prefecture_id' => '10',
            'kanji' => '前橋市',
            'kana' => 'まえばしし',
            'romaji' => 'maebashishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 302
        City::insert([
            'prefecture_id' => '10',
            'kanji' => 'みどり市',
            'kana' => 'みどりし',
            'romaji' => 'midorishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 303
        City::insert([
            'prefecture_id' => '10',
            'kanji' => 'みなかみ町',
            'kana' => 'みなかみまち',
            'romaji' => 'minakamimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 304
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '上尾市',
            'kana' => 'あげおし',
            'romaji' => 'ageoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 305
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '朝霞市',
            'kana' => 'あさかし',
            'romaji' => 'asakashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 306
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '入間市',
            'kana' => 'いるまし',
            'romaji' => 'irumashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 307
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '小川町',
            'kana' => 'おがわまち',
            'romaji' => 'ogawamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 308
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '桶川市',
            'kana' => 'おけがわし',
            'romaji' => 'okegawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 309
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '越生町',
            'kana' => 'おごせまち',
            'romaji' => 'ogosemachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 310
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '神川町',
            'kana' => 'かみかわまち',
            'romaji' => 'kamikawamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 311
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '上里町',
            'kana' => 'かみさとまち',
            'romaji' => 'kamisatomachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 312
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '川口市',
            'kana' => 'かわぐちし',
            'romaji' => 'kawaguchishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 313
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '川越市',
            'kana' => 'かわごえし',
            'romaji' => 'kawagoeshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 314
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '北本市',
            'kana' => 'きたもとし',
            'romaji' => 'kitamotoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 315
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '行田市',
            'kana' => 'ぎょうだし',
            'romaji' => 'gyoudashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 316
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '久喜市',
            'kana' => 'くきし',
            'romaji' => 'kukishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 317
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '熊谷市',
            'kana' => 'くまがやし',
            'romaji' => 'kumagayashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 318
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '鴻巣市',
            'kana' => 'こうのすし',
            'romaji' => 'kounosushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 319
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '越谷市',
            'kana' => 'こしがやし',
            'romaji' => 'koshigayashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 320
        City::insert([
            'prefecture_id' => '11',
            'kanji' => 'さいたま市',
            'kana' => 'さいたまし',
            'romaji' => 'saitamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 321
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '白岡市',
            'kana' => 'しらおかし',
            'romaji' => 'shiraokashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 322
        City::insert([
            'prefecture_id' => '11',
            'kanji' => 'ときがわ町',
            'kana' => 'ときがわまち',
            'romaji' => 'tokigawamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 323
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '所沢市',
            'kana' => 'ところざわし',
            'romaji' => 'tokorozawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 324
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '戸田市',
            'kana' => 'とだし',
            'romaji' => 'todashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 325
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '新座市',
            'kana' => 'にいざし',
            'romaji' => 'niizashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 326
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '蓮田市',
            'kana' => 'はすだし',
            'romaji' => 'hasudashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 327
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '飯能市',
            'kana' => 'はんのうし',
            'romaji' => 'hannoushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 328
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '日高市',
            'kana' => 'ひだかし',
            'romaji' => 'hidakashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 329
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '深谷市',
            'kana' => 'ふかやし',
            'romaji' => 'fukayashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 330
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '本庄市',
            'kana' => 'ほんじょうし',
            'romaji' => 'honjoushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 331
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '三郷市',
            'kana' => 'みさとし',
            'romaji' => 'misatoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 332
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '美里町',
            'kana' => 'みさとまち',
            'romaji' => 'misatomachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 333
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '毛呂山町',
            'kana' => 'もろやままち',
            'romaji' => 'moroyamamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 334
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '吉川市',
            'kana' => 'よしかわし',
            'romaji' => 'yoshikawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 335
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '寄居町',
            'kana' => 'よりいまち',
            'romaji' => 'yoriimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 336
        City::insert([
            'prefecture_id' => '11',
            'kanji' => '蕨市',
            'kana' => 'わらびし',
            'romaji' => 'warabishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 337
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '旭市',
            'kana' => 'あさひし',
            'romaji' => 'asahishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 338
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '我孫子市',
            'kana' => 'あびこし',
            'romaji' => 'abikoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 339
        City::insert([
            'prefecture_id' => '12',
            'kanji' => 'いすみ市',
            'kana' => 'いすみし',
            'romaji' => 'isumishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 340
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '市川市',
            'kana' => 'いちかわし',
            'romaji' => 'ichikawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 341
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '一宮町',
            'kana' => 'いちのみやまち',
            'romaji' => 'ichinomiyamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 342
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '市原市',
            'kana' => 'いちはらし',
            'romaji' => 'ichiharashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 343
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '印西市',
            'kana' => 'いんざいし',
            'romaji' => 'inzaishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 344
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '浦安市',
            'kana' => 'うらやすし',
            'romaji' => 'urayasushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 345
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '大網白里市',
            'kana' => 'おおあみしらさとし',
            'romaji' => 'ooamishirasatoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 346
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '御宿町',
            'kana' => 'おんじゅくまち',
            'romaji' => 'onjukumachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 347
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '柏市',
            'kana' => 'かしわし',
            'romaji' => 'kashiwashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 348
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '勝浦市',
            'kana' => 'かつうらし',
            'romaji' => 'katsuurashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 349
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '香取市',
            'kana' => 'かとりし',
            'romaji' => 'katorishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 350
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '鴨川市',
            'kana' => 'かもがわし',
            'romaji' => 'kamogawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 351
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '木更津市',
            'kana' => 'きさらづし',
            'romaji' => 'kisarazushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 352
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '君津市',
            'kana' => 'きみつし',
            'romaji' => 'kimitsushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 353
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '鋸南町',
            'kana' => 'きょなんまち',
            'romaji' => 'kyonanmachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 354
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '神崎町',
            'kana' => 'こうざきまち',
            'romaji' => 'kouzakimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 355
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '栄町',
            'kana' => 'さかえまち',
            'romaji' => 'sakaemachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 356
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '佐倉市',
            'kana' => 'さくらし',
            'romaji' => 'sakurashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 357
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '山武市',
            'kana' => 'さんむし',
            'romaji' => 'sanmushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 358
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '酒々井町',
            'kana' => 'しすいまち',
            'romaji' => 'shisuimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 359
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '匝瑳市',
            'kana' => 'そうさし',
            'romaji' => 'sousashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 360
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '袖ヶ浦市',
            'kana' => 'そでがうらし',
            'romaji' => 'sodegaurashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 361
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '館山市',
            'kana' => 'たてやまし',
            'romaji' => 'tateyamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 362
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '千葉市',
            'kana' => 'ちばし',
            'romaji' => 'chibashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 363
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '銚子市',
            'kana' => 'ちょうしし',
            'romaji' => 'choushishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 364
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '長生村',
            'kana' => 'ちょうせいむら',
            'romaji' => 'chouseimura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 365
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '東金市',
            'kana' => 'とうがねし',
            'romaji' => 'touganeshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 366
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '東庄町',
            'kana' => 'とうのしょうまち',
            'romaji' => 'tounoshoumachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 367
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '流山市',
            'kana' => 'ながれやまし',
            'romaji' => 'nagareyamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 368
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '習志野市',
            'kana' => 'ならしのし',
            'romaji' => 'narashinoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 369
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '成田市',
            'kana' => 'なりたし',
            'romaji' => 'naritashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 370
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '富津市',
            'kana' => 'ふっつし',
            'romaji' => 'futtsushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 371
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '船橋市',
            'kana' => 'ふなばしし',
            'romaji' => 'funabashishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 372
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '松戸市',
            'kana' => 'まつどし',
            'romaji' => 'matsudoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 373
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '南房総市',
            'kana' => 'みなみぼうそうし',
            'romaji' => 'minamibousoushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 374
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '茂原市',
            'kana' => 'もばらし',
            'romaji' => 'mobarashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 375
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '八街市',
            'kana' => 'やちまたし',
            'romaji' => 'yachimatashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 376
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '横芝光町',
            'kana' => 'よこしばひかりまち',
            'romaji' => 'yokoshibahikarimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 377
        City::insert([
            'prefecture_id' => '12',
            'kanji' => '四街道市',
            'kana' => 'よつかいどうし',
            'romaji' => 'yotsukaidoushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 378
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '昭島市',
            'kana' => 'あきしまし',
            'romaji' => 'akishimashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 379
        City::insert([
            'prefecture_id' => '13',
            'kanji' => 'あきる野市',
            'kana' => 'あきるのし',
            'romaji' => 'akirunoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 380
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '足立区',
            'kana' => 'あだちく',
            'romaji' => 'adachiku',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 381
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '荒川区',
            'kana' => 'あらかわく',
            'romaji' => 'arakawaku',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 382
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '板橋区',
            'kana' => 'いたばしく',
            'romaji' => 'itabashiku',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 383
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '稲城市',
            'kana' => 'いなぎし',
            'romaji' => 'inagishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 384
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '江戸川区',
            'kana' => 'えどがわく',
            'romaji' => 'edogawaku',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 385
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '青梅市',
            'kana' => 'おうめし',
            'romaji' => 'oumeshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 386
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '大田区',
            'kana' => 'おおたく',
            'romaji' => 'ootaku',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 387
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '奥多摩町',
            'kana' => 'おくたままち',
            'romaji' => 'okutamamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 388
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '葛飾区',
            'kana' => 'かつしかく',
            'romaji' => 'katsushikaku',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 389
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '北区',
            'kana' => 'きたく',
            'romaji' => 'kitaku',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 390
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '国立市',
            'kana' => 'くにたちし',
            'romaji' => 'kunitachishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 391
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '江東区',
            'kana' => 'こうとうく',
            'romaji' => 'koutouku',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 392
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '小金井市',
            'kana' => 'こがねいし',
            'romaji' => 'koganeishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 393
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '国分寺市',
            'kana' => 'こくぶんじし',
            'romaji' => 'kokubunjishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 394
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '小平市',
            'kana' => 'こだいらし',
            'romaji' => 'kodairashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 395
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '品川区',
            'kana' => 'しながわく',
            'romaji' => 'shinagawaku',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 396
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '渋谷区',
            'kana' => 'しぶやく',
            'romaji' => 'shibuyaku',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 397
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '新宿区',
            'kana' => 'しんじゅくく',
            'romaji' => 'shinjukuku',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 398
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '杉並区',
            'kana' => 'すぎなみく',
            'romaji' => 'suginamiku',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 399
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '墨田区',
            'kana' => 'すみだく',
            'romaji' => 'sumidaku',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 400
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '台東区',
            'kana' => 'たいとうく',
            'romaji' => 'taitouku',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 401
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '立川市',
            'kana' => 'たちかわし',
            'romaji' => 'tachikawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 402
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '中央区',
            'kana' => 'ちゅうおうく',
            'romaji' => 'chuuouku',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 403
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '千代田区',
            'kana' => 'ちよだく',
            'romaji' => 'chiyodaku',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 404
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '豊島区',
            'kana' => 'としまく',
            'romaji' => 'toshimaku',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 405
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '中野区',
            'kana' => 'なかのく',
            'romaji' => 'nakanoku',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 406
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '八王子市',
            'kana' => 'はちおうじし',
            'romaji' => 'hachioujishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 407
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '羽村市',
            'kana' => 'はむらし',
            'romaji' => 'hamurashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 408
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '東村山市',
            'kana' => 'ひがしむらやまし',
            'romaji' => 'higashimurayamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 409
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '日野市',
            'kana' => 'ひのし',
            'romaji' => 'hinoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 410
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '府中市',
            'kana' => 'ふちゅうし',
            'romaji' => 'fuchuushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 411
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '福生市',
            'kana' => 'ふっさし',
            'romaji' => 'fussashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 412
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '町田市',
            'kana' => 'まちだし',
            'romaji' => 'machidashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 413
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '瑞穂町',
            'kana' => 'みずほまち',
            'romaji' => 'mizuhomachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 414
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '三鷹市',
            'kana' => 'みたかし',
            'romaji' => 'mitakashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 415
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '港区',
            'kana' => 'みなとく',
            'romaji' => 'minatoku',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 416
        City::insert([
            'prefecture_id' => '13',
            'kanji' => '武蔵野市',
            'kana' => 'むさしのし',
            'romaji' => 'musashinoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 417
        City::insert([
            'prefecture_id' => '14',
            'kanji' => '海老名市',
            'kana' => 'えびなし',
            'romaji' => 'ebinashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 418
        City::insert([
            'prefecture_id' => '14',
            'kanji' => '大磯町',
            'kana' => 'おおいそまち',
            'romaji' => 'ooisomachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 419
        City::insert([
            'prefecture_id' => '14',
            'kanji' => '大井町',
            'kana' => 'おおいまち',
            'romaji' => 'ooimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 420
        City::insert([
            'prefecture_id' => '14',
            'kanji' => '小田原市',
            'kana' => 'おだわらし',
            'romaji' => 'odawarashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 421
        City::insert([
            'prefecture_id' => '14',
            'kanji' => '鎌倉市',
            'kana' => 'かまくらし',
            'romaji' => 'kamakurashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 422
        City::insert([
            'prefecture_id' => '14',
            'kanji' => '川崎市',
            'kana' => 'かわさきし',
            'romaji' => 'kawasakishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 423
        City::insert([
            'prefecture_id' => '14',
            'kanji' => '相模原市',
            'kana' => 'さがみはらし',
            'romaji' => 'sagamiharashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 424
        City::insert([
            'prefecture_id' => '14',
            'kanji' => '座間市',
            'kana' => 'ざまし',
            'romaji' => 'zamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 425
        City::insert([
            'prefecture_id' => '14',
            'kanji' => '寒川町',
            'kana' => 'さむかわまち',
            'romaji' => 'samukawamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 426
        City::insert([
            'prefecture_id' => '14',
            'kanji' => '逗子市',
            'kana' => 'ずしし',
            'romaji' => 'zushishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 427
        City::insert([
            'prefecture_id' => '14',
            'kanji' => '茅ヶ崎市',
            'kana' => 'ちがさきし',
            'romaji' => 'chigasakishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 428
        City::insert([
            'prefecture_id' => '14',
            'kanji' => '二宮町',
            'kana' => 'にのみやまち',
            'romaji' => 'ninomiyamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 429
        City::insert([
            'prefecture_id' => '14',
            'kanji' => '平塚市',
            'kana' => 'ひらつかし',
            'romaji' => 'hiratsukashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 430
        City::insert([
            'prefecture_id' => '14',
            'kanji' => '藤沢市',
            'kana' => 'ふじさわし',
            'romaji' => 'fujisawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 431
        City::insert([
            'prefecture_id' => '14',
            'kanji' => '松田町',
            'kana' => 'まつだまち',
            'romaji' => 'matsudamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 432
        City::insert([
            'prefecture_id' => '14',
            'kanji' => '真鶴町',
            'kana' => 'まなづるまち',
            'romaji' => 'manazurumachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 433
        City::insert([
            'prefecture_id' => '14',
            'kanji' => '山北町',
            'kana' => 'やまきたまち',
            'romaji' => 'yamakitamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 434
        City::insert([
            'prefecture_id' => '14',
            'kanji' => '湯河原町',
            'kana' => 'ゆがわらまち',
            'romaji' => 'yugawaramachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 435
        City::insert([
            'prefecture_id' => '14',
            'kanji' => '横須賀市',
            'kana' => 'よこすかし',
            'romaji' => 'yokosukashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 436
        City::insert([
            'prefecture_id' => '14',
            'kanji' => '横浜市',
            'kana' => 'よこはまし',
            'romaji' => 'yokohamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 437
        City::insert([
            'prefecture_id' => '15',
            'kanji' => '阿賀野市',
            'kana' => 'あがのし',
            'romaji' => 'aganoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 438
        City::insert([
            'prefecture_id' => '15',
            'kanji' => '阿賀町',
            'kana' => 'あがまち',
            'romaji' => 'agamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 439
        City::insert([
            'prefecture_id' => '15',
            'kanji' => '出雲崎町',
            'kana' => 'いずもざきまち',
            'romaji' => 'izumozakimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 440
        City::insert([
            'prefecture_id' => '15',
            'kanji' => '糸魚川市',
            'kana' => 'いといがわし',
            'romaji' => 'itoigawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 441
        City::insert([
            'prefecture_id' => '15',
            'kanji' => '魚沼市',
            'kana' => 'うおぬまし',
            'romaji' => 'uonumashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 442
        City::insert([
            'prefecture_id' => '15',
            'kanji' => '小千谷市',
            'kana' => 'おぢやし',
            'romaji' => 'ojiyashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 443
        City::insert([
            'prefecture_id' => '15',
            'kanji' => '柏崎市',
            'kana' => 'かしわざきし',
            'romaji' => 'kashiwazakishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 444
        City::insert([
            'prefecture_id' => '15',
            'kanji' => '加茂市',
            'kana' => 'かもし',
            'romaji' => 'kamoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 445
        City::insert([
            'prefecture_id' => '15',
            'kanji' => '刈羽村',
            'kana' => 'かりわむら',
            'romaji' => 'kariwamura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 446
        City::insert([
            'prefecture_id' => '15',
            'kanji' => '五泉市',
            'kana' => 'ごせんし',
            'romaji' => 'gosenshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 447
        City::insert([
            'prefecture_id' => '15',
            'kanji' => '三条市',
            'kana' => 'さんじょうし',
            'romaji' => 'sanjoushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 448
        City::insert([
            'prefecture_id' => '15',
            'kanji' => '新発田市',
            'kana' => 'しばたし',
            'romaji' => 'shibatashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 449
        City::insert([
            'prefecture_id' => '15',
            'kanji' => '上越市',
            'kana' => 'じょうえつし',
            'romaji' => 'jouetsushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 450
        City::insert([
            'prefecture_id' => '15',
            'kanji' => '関川村',
            'kana' => 'せきかわむら',
            'romaji' => 'sekikawamura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 451
        City::insert([
            'prefecture_id' => '15',
            'kanji' => '胎内市',
            'kana' => 'たいないし',
            'romaji' => 'tainaishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 452
        City::insert([
            'prefecture_id' => '15',
            'kanji' => '田上町',
            'kana' => 'たがみまち',
            'romaji' => 'tagamimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 453
        City::insert([
            'prefecture_id' => '15',
            'kanji' => '津南町',
            'kana' => 'つなんまち',
            'romaji' => 'tsunanmachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 454
        City::insert([
            'prefecture_id' => '15',
            'kanji' => '燕市',
            'kana' => 'つばめし',
            'romaji' => 'tsubameshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 455
        City::insert([
            'prefecture_id' => '15',
            'kanji' => '十日町市',
            'kana' => 'とおかまちし',
            'romaji' => 'tookamachishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 456
        City::insert([
            'prefecture_id' => '15',
            'kanji' => '長岡市',
            'kana' => 'ながおかし',
            'romaji' => 'nagaokashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 457
        City::insert([
            'prefecture_id' => '15',
            'kanji' => '新潟市',
            'kana' => 'にいがたし',
            'romaji' => 'niigatashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 458
        City::insert([
            'prefecture_id' => '15',
            'kanji' => '見附市',
            'kana' => 'みつけし',
            'romaji' => 'mitsukeshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 459
        City::insert([
            'prefecture_id' => '15',
            'kanji' => '南魚沼市',
            'kana' => 'みなみうおぬまし',
            'romaji' => 'minamiuonumashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 460
        City::insert([
            'prefecture_id' => '15',
            'kanji' => '村上市',
            'kana' => 'むらかみし',
            'romaji' => 'murakamishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 461
        City::insert([
            'prefecture_id' => '15',
            'kanji' => '弥彦村',
            'kana' => 'やひこむら',
            'romaji' => 'yahikomura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 462
        City::insert([
            'prefecture_id' => '15',
            'kanji' => '湯沢町',
            'kana' => 'ゆざわまち',
            'romaji' => 'yuzawamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 463
        City::insert([
            'prefecture_id' => '16',
            'kanji' => '黒部市',
            'kana' => 'くろべし',
            'romaji' => 'kurobeshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 464
        City::insert([
            'prefecture_id' => '16',
            'kanji' => '高岡市',
            'kana' => 'たかおかし',
            'romaji' => 'takaokashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 465
        City::insert([
            'prefecture_id' => '16',
            'kanji' => '砺波市',
            'kana' => 'となみし',
            'romaji' => 'tonamishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 466
        City::insert([
            'prefecture_id' => '16',
            'kanji' => '富山市',
            'kana' => 'とやまし',
            'romaji' => 'toyamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 467
        City::insert([
            'prefecture_id' => '16',
            'kanji' => '南砺市',
            'kana' => 'なんとし',
            'romaji' => 'nantoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 468
        City::insert([
            'prefecture_id' => '16',
            'kanji' => '氷見市',
            'kana' => 'ひみし',
            'romaji' => 'himishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 469
        City::insert([
            'prefecture_id' => '17',
            'kanji' => '加賀市',
            'kana' => 'かがし',
            'romaji' => 'kagashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 470
        City::insert([
            'prefecture_id' => '17',
            'kanji' => '金沢市',
            'kana' => 'かなざわし',
            'romaji' => 'kanazawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 471
        City::insert([
            'prefecture_id' => '17',
            'kanji' => 'かほく市',
            'kana' => 'かほくし',
            'romaji' => 'kahokushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 472
        City::insert([
            'prefecture_id' => '17',
            'kanji' => '小松市',
            'kana' => 'こまつし',
            'romaji' => 'komatsushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 473
        City::insert([
            'prefecture_id' => '17',
            'kanji' => '津幡町',
            'kana' => 'つばたまち',
            'romaji' => 'tsubatamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 474
        City::insert([
            'prefecture_id' => '17',
            'kanji' => '中能登町',
            'kana' => 'なかのとまち',
            'romaji' => 'nakanotomachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 475
        City::insert([
            'prefecture_id' => '17',
            'kanji' => '七尾市',
            'kana' => 'ななおし',
            'romaji' => 'nanaoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 476
        City::insert([
            'prefecture_id' => '17',
            'kanji' => '野々市市',
            'kana' => 'ののいちし',
            'romaji' => 'nonoichishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 477
        City::insert([
            'prefecture_id' => '17',
            'kanji' => '能美市',
            'kana' => 'のみし',
            'romaji' => 'nomishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 478
        City::insert([
            'prefecture_id' => '17',
            'kanji' => '羽咋市',
            'kana' => 'はくいし',
            'romaji' => 'hakuishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 479
        City::insert([
            'prefecture_id' => '17',
            'kanji' => '白山市',
            'kana' => 'はくさんし',
            'romaji' => 'hakusanshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 480
        City::insert([
            'prefecture_id' => '17',
            'kanji' => '宝達志水町',
            'kana' => 'ほうだつしみずちょう',
            'romaji' => 'houdatsushimizuchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 481
        City::insert([
            'prefecture_id' => '18',
            'kanji' => 'あわら市',
            'kana' => 'あわらし',
            'romaji' => 'awarashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 482
        City::insert([
            'prefecture_id' => '18',
            'kanji' => '越前市',
            'kana' => 'えちぜんし',
            'romaji' => 'echizenshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 483
        City::insert([
            'prefecture_id' => '18',
            'kanji' => 'おおい町',
            'kana' => 'おおいちょう',
            'romaji' => 'ooichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 484
        City::insert([
            'prefecture_id' => '18',
            'kanji' => '大野市',
            'kana' => 'おおのし',
            'romaji' => 'oonoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 485
        City::insert([
            'prefecture_id' => '18',
            'kanji' => '小浜市',
            'kana' => 'おばまし',
            'romaji' => 'obamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 486
        City::insert([
            'prefecture_id' => '18',
            'kanji' => '坂井市',
            'kana' => 'さかいし',
            'romaji' => 'sakaishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 487
        City::insert([
            'prefecture_id' => '18',
            'kanji' => '鯖江市',
            'kana' => 'さばえし',
            'romaji' => 'sabaeshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 488
        City::insert([
            'prefecture_id' => '18',
            'kanji' => '高浜町',
            'kana' => 'たかはまちょう',
            'romaji' => 'takahamachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 489
        City::insert([
            'prefecture_id' => '18',
            'kanji' => '敦賀市',
            'kana' => 'つるがし',
            'romaji' => 'tsurugashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 490
        City::insert([
            'prefecture_id' => '18',
            'kanji' => '福井市',
            'kana' => 'ふくいし',
            'romaji' => 'fukuishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 491
        City::insert([
            'prefecture_id' => '18',
            'kanji' => '南越前町',
            'kana' => 'みなみえちぜんちょう',
            'romaji' => 'minamiechizenchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 492
        City::insert([
            'prefecture_id' => '18',
            'kanji' => '美浜町',
            'kana' => 'みはまちょう',
            'romaji' => 'mihamachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 493
        City::insert([
            'prefecture_id' => '18',
            'kanji' => '若狭町',
            'kana' => 'わかさちょう',
            'romaji' => 'wakasachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 494
        City::insert([
            'prefecture_id' => '19',
            'kanji' => '市川三郷町',
            'kana' => 'いちかわみさとちょう',
            'romaji' => 'ichikawamisatochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 495
        City::insert([
            'prefecture_id' => '19',
            'kanji' => '上野原市',
            'kana' => 'うえのはらし',
            'romaji' => 'uenoharashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 496
        City::insert([
            'prefecture_id' => '19',
            'kanji' => '大月市',
            'kana' => 'おおつきし',
            'romaji' => 'ootsukishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 497
        City::insert([
            'prefecture_id' => '19',
            'kanji' => '甲斐市',
            'kana' => 'かいし',
            'romaji' => 'kaishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 498
        City::insert([
            'prefecture_id' => '19',
            'kanji' => '甲州市',
            'kana' => 'こうしゅうし',
            'romaji' => 'koushuushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 499
        City::insert([
            'prefecture_id' => '19',
            'kanji' => '甲府市',
            'kana' => 'こうふし',
            'romaji' => 'koufushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 500
        City::insert([
            'prefecture_id' => '19',
            'kanji' => '昭和町',
            'kana' => 'しょうわちょう',
            'romaji' => 'shouwachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 501
        City::insert([
            'prefecture_id' => '19',
            'kanji' => '中央市',
            'kana' => 'ちゅうおうし',
            'romaji' => 'chuuoushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 502
        City::insert([
            'prefecture_id' => '19',
            'kanji' => '南部町',
            'kana' => 'なんぶちょう',
            'romaji' => 'nanbuchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 503
        City::insert([
            'prefecture_id' => '19',
            'kanji' => '韮崎市',
            'kana' => 'にらさきし',
            'romaji' => 'nirasakishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 504
        City::insert([
            'prefecture_id' => '19',
            'kanji' => '笛吹市',
            'kana' => 'ふえふきし',
            'romaji' => 'fuefukishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 505
        City::insert([
            'prefecture_id' => '19',
            'kanji' => '北杜市',
            'kana' => 'ほくとし',
            'romaji' => 'hokutoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 506
        City::insert([
            'prefecture_id' => '19',
            'kanji' => '身延町',
            'kana' => 'みのぶちょう',
            'romaji' => 'minobuchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 507
        City::insert([
            'prefecture_id' => '19',
            'kanji' => '山梨市',
            'kana' => 'やまなしし',
            'romaji' => 'yamanashishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 508
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '上松町',
            'kana' => 'あげまつまち',
            'romaji' => 'agematsumachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 509
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '安曇野市',
            'kana' => 'あづみのし',
            'romaji' => 'azuminoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 510
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '飯島町',
            'kana' => 'いいじままち',
            'romaji' => 'iijimamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 511
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '飯田市',
            'kana' => 'いいだし',
            'romaji' => 'iidashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 512
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '飯山市',
            'kana' => 'いいやまし',
            'romaji' => 'iiyamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 513
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '伊那市',
            'kana' => 'いなし',
            'romaji' => 'inashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 514
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '上田市',
            'kana' => 'うえだし',
            'romaji' => 'uedashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 515
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '大桑村',
            'kana' => 'おおくわむら',
            'romaji' => 'ookuwamura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 516
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '大町市',
            'kana' => 'おおまちし',
            'romaji' => 'oomachishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 517
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '岡谷市',
            'kana' => 'おかやし',
            'romaji' => 'okayashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 518
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '小谷村',
            'kana' => 'おたりむら',
            'romaji' => 'otarimura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 519
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '麻績村',
            'kana' => 'おみむら',
            'romaji' => 'omimura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 520
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '軽井沢町',
            'kana' => 'かるいざわまち',
            'romaji' => 'karuizawamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 521
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '川上村',
            'kana' => 'かわかみむら',
            'romaji' => 'kawakamimura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 522
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '木曽町',
            'kana' => 'きそまち',
            'romaji' => 'kisomachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 523
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '木祖村',
            'kana' => 'きそむら',
            'romaji' => 'kisomura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 524
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '小海町',
            'kana' => 'こうみまち',
            'romaji' => 'koumimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 525
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '駒ヶ根市',
            'kana' => 'こまがねし',
            'romaji' => 'komaganeshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 526
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '小諸市',
            'kana' => 'こもろし',
            'romaji' => 'komoroshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 527
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '栄村',
            'kana' => 'さかえむら',
            'romaji' => 'sakaemura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 528
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '佐久市',
            'kana' => 'さくし',
            'romaji' => 'sakushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 529
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '佐久穂町',
            'kana' => 'さくほまち',
            'romaji' => 'sakuhomachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 530
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '塩尻市',
            'kana' => 'しおじりし',
            'romaji' => 'shiojirishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 531
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '下諏訪町',
            'kana' => 'しもすわまち',
            'romaji' => 'shimosuwamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 532
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '諏訪市',
            'kana' => 'すわし',
            'romaji' => 'suwashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 533
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '高森町',
            'kana' => 'たかもりまち',
            'romaji' => 'takamorimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 534
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '辰野町',
            'kana' => 'たつのまち',
            'romaji' => 'tatsunomachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 535
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '筑北村',
            'kana' => 'ちくほくむら',
            'romaji' => 'chikuhokumura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 536
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '千曲市',
            'kana' => 'ちくまし',
            'romaji' => 'chikumashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 537
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '茅野市',
            'kana' => 'ちのし',
            'romaji' => 'chinoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 538
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '天龍村',
            'kana' => 'てんりゅうむら',
            'romaji' => 'tenryuumura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 539
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '中川村',
            'kana' => 'なかがわむら',
            'romaji' => 'nakagawamura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 540
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '中野市',
            'kana' => 'なかのし',
            'romaji' => 'nakanoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 541
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '長野市',
            'kana' => 'ながのし',
            'romaji' => 'naganoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 542
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '南木曽町',
            'kana' => 'なぎそまち',
            'romaji' => 'nagisomachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 543
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '白馬村',
            'kana' => 'はくばむら',
            'romaji' => 'hakubamura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 544
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '富士見町',
            'kana' => 'ふじみまち',
            'romaji' => 'fujimimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 545
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '松川町',
            'kana' => 'まつかわまち',
            'romaji' => 'matsukawamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 546
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '松川村',
            'kana' => 'まつかわむら',
            'romaji' => 'matsukawamura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 547
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '松本市',
            'kana' => 'まつもとし',
            'romaji' => 'matsumotoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 548
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '南牧村',
            'kana' => 'みなみまきむら',
            'romaji' => 'minamimakimura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 549
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '南箕輪村',
            'kana' => 'みなみみのわむら',
            'romaji' => 'minamiminowamura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 550
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '箕輪町',
            'kana' => 'みのわまち',
            'romaji' => 'minowamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 551
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '宮田村',
            'kana' => 'みやだむら',
            'romaji' => 'miyadamura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 552
        City::insert([
            'prefecture_id' => '20',
            'kanji' => '泰阜村',
            'kana' => 'やすおかむら',
            'romaji' => 'yasuokamura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 553
        City::insert([
            'prefecture_id' => '21',
            'kanji' => '恵那市',
            'kana' => 'えなし',
            'romaji' => 'enashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 554
        City::insert([
            'prefecture_id' => '21',
            'kanji' => '大垣市',
            'kana' => 'おおがきし',
            'romaji' => 'oogakishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 555
        City::insert([
            'prefecture_id' => '21',
            'kanji' => '各務原市',
            'kana' => 'かかみがはらし',
            'romaji' => 'kakamigaharashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 556
        City::insert([
            'prefecture_id' => '21',
            'kanji' => '可児市',
            'kana' => 'かにし',
            'romaji' => 'kanishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 557
        City::insert([
            'prefecture_id' => '21',
            'kanji' => '川辺町',
            'kana' => 'かわべちょう',
            'romaji' => 'kawabechou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 558
        City::insert([
            'prefecture_id' => '21',
            'kanji' => '岐阜市',
            'kana' => 'ぎふし',
            'romaji' => 'gifushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 559
        City::insert([
            'prefecture_id' => '21',
            'kanji' => '下呂市',
            'kana' => 'げろし',
            'romaji' => 'geroshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 560
        City::insert([
            'prefecture_id' => '21',
            'kanji' => '坂祝町',
            'kana' => 'さかほぎちょう',
            'romaji' => 'sakahogichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 561
        City::insert([
            'prefecture_id' => '21',
            'kanji' => '白川町',
            'kana' => 'しらかわちょう',
            'romaji' => 'shirakawachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 562
        City::insert([
            'prefecture_id' => '21',
            'kanji' => '関ケ原町',
            'kana' => 'せきがはらちょう',
            'romaji' => 'sekigaharachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 563
        City::insert([
            'prefecture_id' => '21',
            'kanji' => '高山市',
            'kana' => 'たかやまし',
            'romaji' => 'takayamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 564
        City::insert([
            'prefecture_id' => '21',
            'kanji' => '多治見市',
            'kana' => 'たじみし',
            'romaji' => 'tajimishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 565
        City::insert([
            'prefecture_id' => '21',
            'kanji' => '垂井町',
            'kana' => 'たるいちょう',
            'romaji' => 'taruichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 566
        City::insert([
            'prefecture_id' => '21',
            'kanji' => '土岐市',
            'kana' => 'ときし',
            'romaji' => 'tokishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 567
        City::insert([
            'prefecture_id' => '21',
            'kanji' => '中津川市',
            'kana' => 'なかつがわし',
            'romaji' => 'nakatsugawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 568
        City::insert([
            'prefecture_id' => '21',
            'kanji' => '羽島市',
            'kana' => 'はしまし',
            'romaji' => 'hashimashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 569
        City::insert([
            'prefecture_id' => '21',
            'kanji' => '飛騨市',
            'kana' => 'ひだし',
            'romaji' => 'hidashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 570
        City::insert([
            'prefecture_id' => '21',
            'kanji' => '七宗町',
            'kana' => 'ひちそうちょう',
            'romaji' => 'hichisouchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 571
        City::insert([
            'prefecture_id' => '21',
            'kanji' => '瑞浪市',
            'kana' => 'みずなみし',
            'romaji' => 'mizunamishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 572
        City::insert([
            'prefecture_id' => '21',
            'kanji' => '瑞穂市',
            'kana' => 'みずほし',
            'romaji' => 'mizuhoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 573
        City::insert([
            'prefecture_id' => '21',
            'kanji' => '美濃加茂市',
            'kana' => 'みのかもし',
            'romaji' => 'minokamoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 574
        City::insert([
            'prefecture_id' => '22',
            'kanji' => '熱海市',
            'kana' => 'あたみし',
            'romaji' => 'atamishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 575
        City::insert([
            'prefecture_id' => '22',
            'kanji' => '伊東市',
            'kana' => 'いとうし',
            'romaji' => 'itoushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 576
        City::insert([
            'prefecture_id' => '22',
            'kanji' => '磐田市',
            'kana' => 'いわたし',
            'romaji' => 'iwatashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 577
        City::insert([
            'prefecture_id' => '22',
            'kanji' => '小山町',
            'kana' => 'おやまちょう',
            'romaji' => 'oyamachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 578
        City::insert([
            'prefecture_id' => '22',
            'kanji' => '掛川市',
            'kana' => 'かけがわし',
            'romaji' => 'kakegawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 579
        City::insert([
            'prefecture_id' => '22',
            'kanji' => '函南町',
            'kana' => 'かんなみちょう',
            'romaji' => 'kannamichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 580
        City::insert([
            'prefecture_id' => '22',
            'kanji' => '菊川市',
            'kana' => 'きくがわし',
            'romaji' => 'kikugawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 581
        City::insert([
            'prefecture_id' => '22',
            'kanji' => '湖西市',
            'kana' => 'こさいし',
            'romaji' => 'kosaishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 582
        City::insert([
            'prefecture_id' => '22',
            'kanji' => '御殿場市',
            'kana' => 'ごてんばし',
            'romaji' => 'gotenbashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 583
        City::insert([
            'prefecture_id' => '22',
            'kanji' => '静岡市',
            'kana' => 'しずおかし',
            'romaji' => 'shizuokashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 584
        City::insert([
            'prefecture_id' => '22',
            'kanji' => '島田市',
            'kana' => 'しまだし',
            'romaji' => 'shimadashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 585
        City::insert([
            'prefecture_id' => '22',
            'kanji' => '裾野市',
            'kana' => 'すそのし',
            'romaji' => 'susonoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 586
        City::insert([
            'prefecture_id' => '22',
            'kanji' => '長泉町',
            'kana' => 'ながいずみちょう',
            'romaji' => 'nagaizumichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 587
        City::insert([
            'prefecture_id' => '22',
            'kanji' => '沼津市',
            'kana' => 'ぬまづし',
            'romaji' => 'numazushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 588
        City::insert([
            'prefecture_id' => '22',
            'kanji' => '浜松市',
            'kana' => 'はままつし',
            'romaji' => 'hamamatsushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 589
        City::insert([
            'prefecture_id' => '22',
            'kanji' => '袋井市',
            'kana' => 'ふくろいし',
            'romaji' => 'fukuroishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 590
        City::insert([
            'prefecture_id' => '22',
            'kanji' => '藤枝市',
            'kana' => 'ふじえだし',
            'romaji' => 'fujiedashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 591
        City::insert([
            'prefecture_id' => '22',
            'kanji' => '富士市',
            'kana' => 'ふじし',
            'romaji' => 'fujishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 592
        City::insert([
            'prefecture_id' => '22',
            'kanji' => '富士宮市',
            'kana' => 'ふじのみやし',
            'romaji' => 'fujinomiyashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 593
        City::insert([
            'prefecture_id' => '22',
            'kanji' => '三島市',
            'kana' => 'みしまし',
            'romaji' => 'mishimashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 594
        City::insert([
            'prefecture_id' => '22',
            'kanji' => '焼津市',
            'kana' => 'やいづし',
            'romaji' => 'yaizushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 595
        City::insert([
            'prefecture_id' => '23',
            'kanji' => '愛西市',
            'kana' => 'あいさいし',
            'romaji' => 'aisaishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 596
        City::insert([
            'prefecture_id' => '23',
            'kanji' => '安城市',
            'kana' => 'あんじょうし',
            'romaji' => 'anjoushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 597
        City::insert([
            'prefecture_id' => '23',
            'kanji' => '一宮市',
            'kana' => 'いちのみやし',
            'romaji' => 'ichinomiyashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 598
        City::insert([
            'prefecture_id' => '23',
            'kanji' => '稲沢市',
            'kana' => 'いなざわし',
            'romaji' => 'inazawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 599
        City::insert([
            'prefecture_id' => '23',
            'kanji' => '大府市',
            'kana' => 'おおぶし',
            'romaji' => 'oobushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 600
        City::insert([
            'prefecture_id' => '23',
            'kanji' => '岡崎市',
            'kana' => 'おかざきし',
            'romaji' => 'okazakishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 601
        City::insert([
            'prefecture_id' => '23',
            'kanji' => '春日井市',
            'kana' => 'かすがいし',
            'romaji' => 'kasugaishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 602
        City::insert([
            'prefecture_id' => '23',
            'kanji' => '蟹江町',
            'kana' => 'かにえちょう',
            'romaji' => 'kaniechou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 603
        City::insert([
            'prefecture_id' => '23',
            'kanji' => '蒲郡市',
            'kana' => 'がまごおりし',
            'romaji' => 'gamagoorishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 604
        City::insert([
            'prefecture_id' => '23',
            'kanji' => '刈谷市',
            'kana' => 'かりやし',
            'romaji' => 'kariyashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 605
        City::insert([
            'prefecture_id' => '23',
            'kanji' => '清須市',
            'kana' => 'きよすし',
            'romaji' => 'kiyosushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 606
        City::insert([
            'prefecture_id' => '23',
            'kanji' => '幸田町',
            'kana' => 'こうたちょう',
            'romaji' => 'koutachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 607
        City::insert([
            'prefecture_id' => '23',
            'kanji' => '新城市',
            'kana' => 'しんしろし',
            'romaji' => 'shinshiroshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 608
        City::insert([
            'prefecture_id' => '23',
            'kanji' => '武豊町',
            'kana' => 'たけとよちょう',
            'romaji' => 'taketoyochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 609
        City::insert([
            'prefecture_id' => '23',
            'kanji' => '東栄町',
            'kana' => 'とうえいちょう',
            'romaji' => 'toueichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 610
        City::insert([
            'prefecture_id' => '23',
            'kanji' => '豊川市',
            'kana' => 'とよかわし',
            'romaji' => 'toyokawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 611
        City::insert([
            'prefecture_id' => '23',
            'kanji' => '豊橋市',
            'kana' => 'とよはしし',
            'romaji' => 'toyohashishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 612
        City::insert([
            'prefecture_id' => '23',
            'kanji' => '名古屋市',
            'kana' => 'なごやし',
            'romaji' => 'nagoyashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 613
        City::insert([
            'prefecture_id' => '23',
            'kanji' => '半田市',
            'kana' => 'はんだし',
            'romaji' => 'handashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 614
        City::insert([
            'prefecture_id' => '23',
            'kanji' => '東浦町',
            'kana' => 'ひがしうらちょう',
            'romaji' => 'higashiurachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 615
        City::insert([
            'prefecture_id' => '23',
            'kanji' => '弥富市',
            'kana' => 'やとみし',
            'romaji' => 'yatomishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 616
        City::insert([
            'prefecture_id' => '24',
            'kanji' => '朝日町',
            'kana' => 'あさひちょう',
            'romaji' => 'asahichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 617
        City::insert([
            'prefecture_id' => '24',
            'kanji' => '伊賀市',
            'kana' => 'いがし',
            'romaji' => 'igashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 618
        City::insert([
            'prefecture_id' => '24',
            'kanji' => '伊勢市',
            'kana' => 'いせし',
            'romaji' => 'iseshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 619
        City::insert([
            'prefecture_id' => '24',
            'kanji' => '大台町',
            'kana' => 'おおだいちょう',
            'romaji' => 'oodaichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 620
        City::insert([
            'prefecture_id' => '24',
            'kanji' => '尾鷲市',
            'kana' => 'おわせし',
            'romaji' => 'owaseshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 621
        City::insert([
            'prefecture_id' => '24',
            'kanji' => '亀山市',
            'kana' => 'かめやまし',
            'romaji' => 'kameyamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 622
        City::insert([
            'prefecture_id' => '24',
            'kanji' => '紀宝町',
            'kana' => 'きほうちょう',
            'romaji' => 'kihouchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 623
        City::insert([
            'prefecture_id' => '24',
            'kanji' => '紀北町',
            'kana' => 'きほくちょう',
            'romaji' => 'kihokuchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 624
        City::insert([
            'prefecture_id' => '24',
            'kanji' => '熊野市',
            'kana' => 'くまのし',
            'romaji' => 'kumanoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 625
        City::insert([
            'prefecture_id' => '24',
            'kanji' => '桑名市',
            'kana' => 'くわなし',
            'romaji' => 'kuwanashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 626
        City::insert([
            'prefecture_id' => '24',
            'kanji' => '鈴鹿市',
            'kana' => 'すずかし',
            'romaji' => 'suzukashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 627
        City::insert([
            'prefecture_id' => '24',
            'kanji' => '大紀町',
            'kana' => 'たいきちょう',
            'romaji' => 'taikichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 628
        City::insert([
            'prefecture_id' => '24',
            'kanji' => '多気町',
            'kana' => 'たきちょう',
            'romaji' => 'takichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 629
        City::insert([
            'prefecture_id' => '24',
            'kanji' => '玉城町',
            'kana' => 'たまきちょう',
            'romaji' => 'tamakichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 630
        City::insert([
            'prefecture_id' => '24',
            'kanji' => '津市',
            'kana' => 'つし',
            'romaji' => 'tsushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 631
        City::insert([
            'prefecture_id' => '24',
            'kanji' => '鳥羽市',
            'kana' => 'とばし',
            'romaji' => 'tobashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 632
        City::insert([
            'prefecture_id' => '24',
            'kanji' => '松阪市',
            'kana' => 'まつさかし',
            'romaji' => 'matsusakashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 633
        City::insert([
            'prefecture_id' => '24',
            'kanji' => '御浜町',
            'kana' => 'みはまちょう',
            'romaji' => 'mihamachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 634
        City::insert([
            'prefecture_id' => '24',
            'kanji' => '四日市市',
            'kana' => 'よっかいちし',
            'romaji' => 'yokkaichishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 635
        City::insert([
            'prefecture_id' => '25',
            'kanji' => '近江八幡市',
            'kana' => 'おうみはちまんし',
            'romaji' => 'oumihachimanshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 636
        City::insert([
            'prefecture_id' => '25',
            'kanji' => '大津市',
            'kana' => 'おおつし',
            'romaji' => 'ootsushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 637
        City::insert([
            'prefecture_id' => '25',
            'kanji' => '草津市',
            'kana' => 'くさつし',
            'romaji' => 'kusatsushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 638
        City::insert([
            'prefecture_id' => '25',
            'kanji' => '甲賀市',
            'kana' => 'こうかし',
            'romaji' => 'koukashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 639
        City::insert([
            'prefecture_id' => '25',
            'kanji' => '湖南市',
            'kana' => 'こなんし',
            'romaji' => 'konanshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 640
        City::insert([
            'prefecture_id' => '25',
            'kanji' => '高島市',
            'kana' => 'たかしまし',
            'romaji' => 'takashimashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 641
        City::insert([
            'prefecture_id' => '25',
            'kanji' => '長浜市',
            'kana' => 'ながはまし',
            'romaji' => 'nagahamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 642
        City::insert([
            'prefecture_id' => '25',
            'kanji' => '東近江市',
            'kana' => 'ひがしおうみし',
            'romaji' => 'higashioumishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 643
        City::insert([
            'prefecture_id' => '25',
            'kanji' => '彦根市',
            'kana' => 'ひこねし',
            'romaji' => 'hikoneshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 644
        City::insert([
            'prefecture_id' => '25',
            'kanji' => '米原市',
            'kana' => 'まいばらし',
            'romaji' => 'maibarashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 645
        City::insert([
            'prefecture_id' => '25',
            'kanji' => '守山市',
            'kana' => 'もりやまし',
            'romaji' => 'moriyamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 646
        City::insert([
            'prefecture_id' => '25',
            'kanji' => '野洲市',
            'kana' => 'やすし',
            'romaji' => 'yasushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 647
        City::insert([
            'prefecture_id' => '25',
            'kanji' => '栗東市',
            'kana' => 'りっとうし',
            'romaji' => 'rittoushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 648
        City::insert([
            'prefecture_id' => '26',
            'kanji' => '綾部市',
            'kana' => 'あやべし',
            'romaji' => 'ayabeshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 649
        City::insert([
            'prefecture_id' => '26',
            'kanji' => '井手町',
            'kana' => 'いでちょう',
            'romaji' => 'idechou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 650
        City::insert([
            'prefecture_id' => '26',
            'kanji' => '宇治市',
            'kana' => 'うじし',
            'romaji' => 'ujishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 651
        City::insert([
            'prefecture_id' => '26',
            'kanji' => '大山崎町',
            'kana' => 'おおやまざきちょう',
            'romaji' => 'ooyamazakichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 652
        City::insert([
            'prefecture_id' => '26',
            'kanji' => '笠置町',
            'kana' => 'かさぎちょう',
            'romaji' => 'kasagichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 653
        City::insert([
            'prefecture_id' => '26',
            'kanji' => '亀岡市',
            'kana' => 'かめおかし',
            'romaji' => 'kameokashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 654
        City::insert([
            'prefecture_id' => '26',
            'kanji' => '木津川市',
            'kana' => 'きづがわし',
            'romaji' => 'kizugawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 655
        City::insert([
            'prefecture_id' => '26',
            'kanji' => '京田辺市',
            'kana' => 'きょうたなべし',
            'romaji' => 'kyoutanabeshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 656
        City::insert([
            'prefecture_id' => '26',
            'kanji' => '京丹波町',
            'kana' => 'きょうたんばちょう',
            'romaji' => 'kyoutanbachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 657
        City::insert([
            'prefecture_id' => '26',
            'kanji' => '京都市',
            'kana' => 'きょうとし',
            'romaji' => 'kyoutoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 658
        City::insert([
            'prefecture_id' => '26',
            'kanji' => '城陽市',
            'kana' => 'じょうようし',
            'romaji' => 'jouyoushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 659
        City::insert([
            'prefecture_id' => '26',
            'kanji' => '精華町',
            'kana' => 'せいかちょう',
            'romaji' => 'seikachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 660
        City::insert([
            'prefecture_id' => '26',
            'kanji' => '長岡京市',
            'kana' => 'ながおかきょうし',
            'romaji' => 'nagaokakyoushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 661
        City::insert([
            'prefecture_id' => '26',
            'kanji' => '南丹市',
            'kana' => 'なんたんし',
            'romaji' => 'nantanshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 662
        City::insert([
            'prefecture_id' => '26',
            'kanji' => '福知山市',
            'kana' => 'ふくちやまし',
            'romaji' => 'fukuchiyamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 663
        City::insert([
            'prefecture_id' => '26',
            'kanji' => '舞鶴市',
            'kana' => 'まいづるし',
            'romaji' => 'maizurushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 664
        City::insert([
            'prefecture_id' => '26',
            'kanji' => '南山城村',
            'kana' => 'みなみやましろむら',
            'romaji' => 'minamiyamashiromura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 665
        City::insert([
            'prefecture_id' => '26',
            'kanji' => '向日市',
            'kana' => 'むこうし',
            'romaji' => 'mukoushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 666
        City::insert([
            'prefecture_id' => '27',
            'kanji' => '泉佐野市',
            'kana' => 'いずみさのし',
            'romaji' => 'izumisanoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 667
        City::insert([
            'prefecture_id' => '27',
            'kanji' => '和泉市',
            'kana' => 'いずみし',
            'romaji' => 'izumishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 668
        City::insert([
            'prefecture_id' => '27',
            'kanji' => '茨木市',
            'kana' => 'いばらきし',
            'romaji' => 'ibarakishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 669
        City::insert([
            'prefecture_id' => '27',
            'kanji' => '大阪市',
            'kana' => 'おおさかし',
            'romaji' => 'oosakashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 670
        City::insert([
            'prefecture_id' => '27',
            'kanji' => '貝塚市',
            'kana' => 'かいづかし',
            'romaji' => 'kaizukashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 671
        City::insert([
            'prefecture_id' => '27',
            'kanji' => '柏原市',
            'kana' => 'かしわらし',
            'romaji' => 'kashiwarashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 672
        City::insert([
            'prefecture_id' => '27',
            'kanji' => '交野市',
            'kana' => 'かたのし',
            'romaji' => 'katanoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 673
        City::insert([
            'prefecture_id' => '27',
            'kanji' => '岸和田市',
            'kana' => 'きしわだし',
            'romaji' => 'kishiwadashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 674
        City::insert([
            'prefecture_id' => '27',
            'kanji' => '熊取町',
            'kana' => 'くまとりちょう',
            'romaji' => 'kumatorichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 675
        City::insert([
            'prefecture_id' => '27',
            'kanji' => '堺市',
            'kana' => 'さかいし',
            'romaji' => 'sakaishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 676
        City::insert([
            'prefecture_id' => '27',
            'kanji' => '四條畷市',
            'kana' => 'しじょうなわてし',
            'romaji' => 'shijounawateshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 677
        City::insert([
            'prefecture_id' => '27',
            'kanji' => '島本町',
            'kana' => 'しまもとちょう',
            'romaji' => 'shimamotochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 678
        City::insert([
            'prefecture_id' => '27',
            'kanji' => '吹田市',
            'kana' => 'すいたし',
            'romaji' => 'suitashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 679
        City::insert([
            'prefecture_id' => '27',
            'kanji' => '摂津市',
            'kana' => 'せっつし',
            'romaji' => 'settsushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 680
        City::insert([
            'prefecture_id' => '27',
            'kanji' => '泉南市',
            'kana' => 'せんなんし',
            'romaji' => 'sennanshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 681
        City::insert([
            'prefecture_id' => '27',
            'kanji' => '大東市',
            'kana' => 'だいとうし',
            'romaji' => 'daitoushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 682
        City::insert([
            'prefecture_id' => '27',
            'kanji' => '高石市',
            'kana' => 'たかいしし',
            'romaji' => 'takaishishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 683
        City::insert([
            'prefecture_id' => '27',
            'kanji' => '高槻市',
            'kana' => 'たかつきし',
            'romaji' => 'takatsukishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 684
        City::insert([
            'prefecture_id' => '27',
            'kanji' => '田尻町',
            'kana' => 'たじりちょう',
            'romaji' => 'tajirichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 685
        City::insert([
            'prefecture_id' => '27',
            'kanji' => '寝屋川市',
            'kana' => 'ねやがわし',
            'romaji' => 'neyagawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 686
        City::insert([
            'prefecture_id' => '27',
            'kanji' => '阪南市',
            'kana' => 'はんなんし',
            'romaji' => 'hannanshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 687
        City::insert([
            'prefecture_id' => '27',
            'kanji' => '東大阪市',
            'kana' => 'ひがしおおさかし',
            'romaji' => 'higashioosakashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 688
        City::insert([
            'prefecture_id' => '27',
            'kanji' => '枚方市',
            'kana' => 'ひらかたし',
            'romaji' => 'hirakatashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 689
        City::insert([
            'prefecture_id' => '27',
            'kanji' => '八尾市',
            'kana' => 'やおし',
            'romaji' => 'yaoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 690
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '相生市',
            'kana' => 'あいおいし',
            'romaji' => 'aioishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 691
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '明石市',
            'kana' => 'あかしし',
            'romaji' => 'akashishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 692
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '赤穂市',
            'kana' => 'あこうし',
            'romaji' => 'akoushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 693
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '朝来市',
            'kana' => 'あさごし',
            'romaji' => 'asagoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 694
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '芦屋市',
            'kana' => 'あしやし',
            'romaji' => 'ashiyashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 695
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '尼崎市',
            'kana' => 'あまがさきし',
            'romaji' => 'amagasakishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 696
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '伊丹市',
            'kana' => 'いたみし',
            'romaji' => 'itamishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 697
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '市川町',
            'kana' => 'いちかわちょう',
            'romaji' => 'ichikawachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 698
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '小野市',
            'kana' => 'おのし',
            'romaji' => 'onoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 699
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '加古川市',
            'kana' => 'かこがわし',
            'romaji' => 'kakogawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 700
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '加東市',
            'kana' => 'かとうし',
            'romaji' => 'katoushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 701
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '神河町',
            'kana' => 'かみかわちょう',
            'romaji' => 'kamikawachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 702
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '上郡町',
            'kana' => 'かみごおりちょう',
            'romaji' => 'kamigoorichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 703
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '香美町',
            'kana' => 'かみちょう',
            'romaji' => 'kamichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 704
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '川西市',
            'kana' => 'かわにしし',
            'romaji' => 'kawanishishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 705
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '神戸市',
            'kana' => 'こうべし',
            'romaji' => 'koubeshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 706
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '佐用町',
            'kana' => 'さようちょう',
            'romaji' => 'sayouchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 707
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '三田市',
            'kana' => 'さんだし',
            'romaji' => 'sandashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 708
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '新温泉町',
            'kana' => 'しんおんせんちょう',
            'romaji' => 'shin\'onsenchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 709
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '高砂市',
            'kana' => 'たかさごし',
            'romaji' => 'takasagoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 710
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '宝塚市',
            'kana' => 'たからづかし',
            'romaji' => 'takarazukashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 711
        City::insert([
            'prefecture_id' => '28',
            'kanji' => 'たつの市',
            'kana' => 'たつのし',
            'romaji' => 'tatsunoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 712
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '丹波篠山市',
            'kana' => 'たんばささやまし',
            'romaji' => 'tanbasasayamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 713
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '丹波市',
            'kana' => 'たんばし',
            'romaji' => 'tanbashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 714
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '豊岡市',
            'kana' => 'とよおかし',
            'romaji' => 'toyookashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 715
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '西宮市',
            'kana' => 'にしのみやし',
            'romaji' => 'nishinomiyashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 716
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '西脇市',
            'kana' => 'にしわきし',
            'romaji' => 'nishiwakishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 717
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '播磨町',
            'kana' => 'はりまちょう',
            'romaji' => 'harimachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 718
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '姫路市',
            'kana' => 'ひめじし',
            'romaji' => 'himejishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 719
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '福崎町',
            'kana' => 'ふくさきちょう',
            'romaji' => 'fukusakichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 720
        City::insert([
            'prefecture_id' => '28',
            'kanji' => '養父市',
            'kana' => 'やぶし',
            'romaji' => 'yabushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 721
        City::insert([
            'prefecture_id' => '29',
            'kanji' => '斑鳩町',
            'kana' => 'いかるがちょう',
            'romaji' => 'ikarugachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 722
        City::insert([
            'prefecture_id' => '29',
            'kanji' => '王寺町',
            'kana' => 'おうじちょう',
            'romaji' => 'oujichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 723
        City::insert([
            'prefecture_id' => '29',
            'kanji' => '香芝市',
            'kana' => 'かしばし',
            'romaji' => 'kashibashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 724
        City::insert([
            'prefecture_id' => '29',
            'kanji' => '橿原市',
            'kana' => 'かしはらし',
            'romaji' => 'kashiharashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 725
        City::insert([
            'prefecture_id' => '29',
            'kanji' => '葛城市',
            'kana' => 'かつらぎし',
            'romaji' => 'katsuragishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 726
        City::insert([
            'prefecture_id' => '29',
            'kanji' => '五條市',
            'kana' => 'ごじょうし',
            'romaji' => 'gojoushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 727
        City::insert([
            'prefecture_id' => '29',
            'kanji' => '御所市',
            'kana' => 'ごせし',
            'romaji' => 'goseshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 728
        City::insert([
            'prefecture_id' => '29',
            'kanji' => '桜井市',
            'kana' => 'さくらいし',
            'romaji' => 'sakuraishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 729
        City::insert([
            'prefecture_id' => '29',
            'kanji' => '三郷町',
            'kana' => 'さんごうちょう',
            'romaji' => 'sangouchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 730
        City::insert([
            'prefecture_id' => '29',
            'kanji' => '天理市',
            'kana' => 'てんりし',
            'romaji' => 'tenrishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 731
        City::insert([
            'prefecture_id' => '29',
            'kanji' => '奈良市',
            'kana' => 'ならし',
            'romaji' => 'narashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 732
        City::insert([
            'prefecture_id' => '29',
            'kanji' => '大和郡山市',
            'kana' => 'やまとこおりやまし',
            'romaji' => 'yamatokooriyamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 733
        City::insert([
            'prefecture_id' => '29',
            'kanji' => '大和高田市',
            'kana' => 'やまとたかだし',
            'romaji' => 'yamatotakadashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 734
        City::insert([
            'prefecture_id' => '30',
            'kanji' => '有田川町',
            'kana' => 'ありだがわちょう',
            'romaji' => 'aridagawachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 735
        City::insert([
            'prefecture_id' => '30',
            'kanji' => '有田市',
            'kana' => 'ありだし',
            'romaji' => 'aridashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 736
        City::insert([
            'prefecture_id' => '30',
            'kanji' => '印南町',
            'kana' => 'いなみちょう',
            'romaji' => 'inamichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 737
        City::insert([
            'prefecture_id' => '30',
            'kanji' => '岩出市',
            'kana' => 'いわでし',
            'romaji' => 'iwadeshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 738
        City::insert([
            'prefecture_id' => '30',
            'kanji' => '海南市',
            'kana' => 'かいなんし',
            'romaji' => 'kainanshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 739
        City::insert([
            'prefecture_id' => '30',
            'kanji' => 'かつらぎ町',
            'kana' => 'かつらぎちょう',
            'romaji' => 'katsuragichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 740
        City::insert([
            'prefecture_id' => '30',
            'kanji' => '上富田町',
            'kana' => 'かみとんだちょう',
            'romaji' => 'kamitondachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 741
        City::insert([
            'prefecture_id' => '30',
            'kanji' => '紀の川市',
            'kana' => 'きのかわし',
            'romaji' => 'kinokawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 742
        City::insert([
            'prefecture_id' => '30',
            'kanji' => '串本町',
            'kana' => 'くしもとちょう',
            'romaji' => 'kushimotochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 743
        City::insert([
            'prefecture_id' => '30',
            'kanji' => '御坊市',
            'kana' => 'ごぼうし',
            'romaji' => 'goboushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 744
        City::insert([
            'prefecture_id' => '30',
            'kanji' => '白浜町',
            'kana' => 'しらはまちょう',
            'romaji' => 'shirahamachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 745
        City::insert([
            'prefecture_id' => '30',
            'kanji' => '新宮市',
            'kana' => 'しんぐうし',
            'romaji' => 'shinguushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 746
        City::insert([
            'prefecture_id' => '30',
            'kanji' => 'すさみ町',
            'kana' => 'すさみちょう',
            'romaji' => 'susamichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 747
        City::insert([
            'prefecture_id' => '30',
            'kanji' => '太地町',
            'kana' => 'たいじちょう',
            'romaji' => 'taijichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 748
        City::insert([
            'prefecture_id' => '30',
            'kanji' => '田辺市',
            'kana' => 'たなべし',
            'romaji' => 'tanabeshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 749
        City::insert([
            'prefecture_id' => '30',
            'kanji' => '那智勝浦町',
            'kana' => 'なちかつうらちょう',
            'romaji' => 'nachikatsuurachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 750
        City::insert([
            'prefecture_id' => '30',
            'kanji' => '橋本市',
            'kana' => 'はしもとし',
            'romaji' => 'hashimotoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 751
        City::insert([
            'prefecture_id' => '30',
            'kanji' => '日高川町',
            'kana' => 'ひだかがわちょう',
            'romaji' => 'hidakagawachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 752
        City::insert([
            'prefecture_id' => '30',
            'kanji' => '日高町',
            'kana' => 'ひだかちょう',
            'romaji' => 'hidakachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 753
        City::insert([
            'prefecture_id' => '30',
            'kanji' => '広川町',
            'kana' => 'ひろがわちょう',
            'romaji' => 'hirogawachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 754
        City::insert([
            'prefecture_id' => '30',
            'kanji' => 'みなべ町',
            'kana' => 'みなべちょう',
            'romaji' => 'minabechou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 755
        City::insert([
            'prefecture_id' => '30',
            'kanji' => '湯浅町',
            'kana' => 'ゆあさちょう',
            'romaji' => 'yuasachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 756
        City::insert([
            'prefecture_id' => '30',
            'kanji' => '由良町',
            'kana' => 'ゆらちょう',
            'romaji' => 'yurachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 757
        City::insert([
            'prefecture_id' => '30',
            'kanji' => '和歌山市',
            'kana' => 'わかやまし',
            'romaji' => 'wakayamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 758
        City::insert([
            'prefecture_id' => '31',
            'kanji' => '岩美町',
            'kana' => 'いわみちょう',
            'romaji' => 'iwamichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 759
        City::insert([
            'prefecture_id' => '31',
            'kanji' => '倉吉市',
            'kana' => 'くらよしし',
            'romaji' => 'kurayoshishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 760
        City::insert([
            'prefecture_id' => '31',
            'kanji' => '江府町',
            'kana' => 'こうふちょう',
            'romaji' => 'koufuchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 761
        City::insert([
            'prefecture_id' => '31',
            'kanji' => '琴浦町',
            'kana' => 'ことうらちょう',
            'romaji' => 'kotourachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 762
        City::insert([
            'prefecture_id' => '31',
            'kanji' => '境港市',
            'kana' => 'さかいみなとし',
            'romaji' => 'sakaiminatoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 763
        City::insert([
            'prefecture_id' => '31',
            'kanji' => '大山町',
            'kana' => 'だいせんちょう',
            'romaji' => 'daisenchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 764
        City::insert([
            'prefecture_id' => '31',
            'kanji' => '智頭町',
            'kana' => 'ちづちょう',
            'romaji' => 'chizuchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 765
        City::insert([
            'prefecture_id' => '31',
            'kanji' => '鳥取市',
            'kana' => 'とっとりし',
            'romaji' => 'tottorishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 766
        City::insert([
            'prefecture_id' => '31',
            'kanji' => '日南町',
            'kana' => 'にちなんちょう',
            'romaji' => 'nichinanchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 767
        City::insert([
            'prefecture_id' => '31',
            'kanji' => '日野町',
            'kana' => 'ひのちょう',
            'romaji' => 'hinochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 768
        City::insert([
            'prefecture_id' => '31',
            'kanji' => '伯耆町',
            'kana' => 'ほうきちょう',
            'romaji' => 'houkichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 769
        City::insert([
            'prefecture_id' => '31',
            'kanji' => '北栄町',
            'kana' => 'ほくえいちょう',
            'romaji' => 'hokueichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 770
        City::insert([
            'prefecture_id' => '31',
            'kanji' => '八頭町',
            'kana' => 'やずちょう',
            'romaji' => 'yazuchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 771
        City::insert([
            'prefecture_id' => '31',
            'kanji' => '湯梨浜町',
            'kana' => 'ゆりはまちょう',
            'romaji' => 'yurihamachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 772
        City::insert([
            'prefecture_id' => '31',
            'kanji' => '米子市',
            'kana' => 'よなごし',
            'romaji' => 'yonagoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 773
        City::insert([
            'prefecture_id' => '32',
            'kanji' => '出雲市',
            'kana' => 'いずもし',
            'romaji' => 'izumoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 774
        City::insert([
            'prefecture_id' => '32',
            'kanji' => '雲南市',
            'kana' => 'うんなんし',
            'romaji' => 'unnanshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 775
        City::insert([
            'prefecture_id' => '32',
            'kanji' => '大田市',
            'kana' => 'おおだし',
            'romaji' => 'oodashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 776
        City::insert([
            'prefecture_id' => '32',
            'kanji' => '奥出雲町',
            'kana' => 'おくいずもちょう',
            'romaji' => 'okuizumochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 777
        City::insert([
            'prefecture_id' => '32',
            'kanji' => '江津市',
            'kana' => 'ごうつし',
            'romaji' => 'goutsushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 778
        City::insert([
            'prefecture_id' => '32',
            'kanji' => '津和野町',
            'kana' => 'つわのちょう',
            'romaji' => 'tsuwanochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 779
        City::insert([
            'prefecture_id' => '32',
            'kanji' => '浜田市',
            'kana' => 'はまだし',
            'romaji' => 'hamadashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 780
        City::insert([
            'prefecture_id' => '32',
            'kanji' => '益田市',
            'kana' => 'ますだし',
            'romaji' => 'masudashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 781
        City::insert([
            'prefecture_id' => '32',
            'kanji' => '松江市',
            'kana' => 'まつえし',
            'romaji' => 'matsueshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 782
        City::insert([
            'prefecture_id' => '32',
            'kanji' => '安来市',
            'kana' => 'やすぎし',
            'romaji' => 'yasugishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 783
        City::insert([
            'prefecture_id' => '33',
            'kanji' => '赤磐市',
            'kana' => 'あかいわし',
            'romaji' => 'akaiwashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 784
        City::insert([
            'prefecture_id' => '33',
            'kanji' => '浅口市',
            'kana' => 'あさくちし',
            'romaji' => 'asakuchishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 785
        City::insert([
            'prefecture_id' => '33',
            'kanji' => '岡山市',
            'kana' => 'おかやまし',
            'romaji' => 'okayamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 786
        City::insert([
            'prefecture_id' => '33',
            'kanji' => '笠岡市',
            'kana' => 'かさおかし',
            'romaji' => 'kasaokashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 787
        City::insert([
            'prefecture_id' => '33',
            'kanji' => '久米南町',
            'kana' => 'くめなんちょう',
            'romaji' => 'kumenanchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 788
        City::insert([
            'prefecture_id' => '33',
            'kanji' => '倉敷市',
            'kana' => 'くらしきし',
            'romaji' => 'kurashikishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 789
        City::insert([
            'prefecture_id' => '33',
            'kanji' => '里庄町',
            'kana' => 'さとしょうちょう',
            'romaji' => 'satoshouchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 790
        City::insert([
            'prefecture_id' => '33',
            'kanji' => '勝央町',
            'kana' => 'しょうおうちょう',
            'romaji' => 'shououchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 791
        City::insert([
            'prefecture_id' => '33',
            'kanji' => '瀬戸内市',
            'kana' => 'せとうちし',
            'romaji' => 'setouchishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 792
        City::insert([
            'prefecture_id' => '33',
            'kanji' => '総社市',
            'kana' => 'そうじゃし',
            'romaji' => 'soujashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 793
        City::insert([
            'prefecture_id' => '33',
            'kanji' => '高梁市',
            'kana' => 'たかはしし',
            'romaji' => 'takahashishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 794
        City::insert([
            'prefecture_id' => '33',
            'kanji' => '玉野市',
            'kana' => 'たまのし',
            'romaji' => 'tamanoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 795
        City::insert([
            'prefecture_id' => '33',
            'kanji' => '津山市',
            'kana' => 'つやまし',
            'romaji' => 'tsuyamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 796
        City::insert([
            'prefecture_id' => '33',
            'kanji' => '新見市',
            'kana' => 'にいみし',
            'romaji' => 'niimishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 797
        City::insert([
            'prefecture_id' => '33',
            'kanji' => '早島町',
            'kana' => 'はやしまちょう',
            'romaji' => 'hayashimachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 798
        City::insert([
            'prefecture_id' => '33',
            'kanji' => '備前市',
            'kana' => 'びぜんし',
            'romaji' => 'bizenshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 799
        City::insert([
            'prefecture_id' => '33',
            'kanji' => '真庭市',
            'kana' => 'まにわし',
            'romaji' => 'maniwashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 800
        City::insert([
            'prefecture_id' => '33',
            'kanji' => '美咲町',
            'kana' => 'みさきちょう',
            'romaji' => 'misakichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 801
        City::insert([
            'prefecture_id' => '33',
            'kanji' => '美作市',
            'kana' => 'みまさかし',
            'romaji' => 'mimasakashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 802
        City::insert([
            'prefecture_id' => '33',
            'kanji' => '和気町',
            'kana' => 'わけちょう',
            'romaji' => 'wakechou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 803
        City::insert([
            'prefecture_id' => '34',
            'kanji' => '安芸高田市',
            'kana' => 'あきたかたし',
            'romaji' => 'akitakatashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 804
        City::insert([
            'prefecture_id' => '34',
            'kanji' => '大竹市',
            'kana' => 'おおたけし',
            'romaji' => 'ootakeshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 805
        City::insert([
            'prefecture_id' => '34',
            'kanji' => '尾道市',
            'kana' => 'おのみちし',
            'romaji' => 'onomichishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 806
        City::insert([
            'prefecture_id' => '34',
            'kanji' => '海田町',
            'kana' => 'かいたちょう',
            'romaji' => 'kaitachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 807
        City::insert([
            'prefecture_id' => '34',
            'kanji' => '呉市',
            'kana' => 'くれし',
            'romaji' => 'kureshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 808
        City::insert([
            'prefecture_id' => '34',
            'kanji' => '坂町',
            'kana' => 'さかちょう',
            'romaji' => 'sakachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 809
        City::insert([
            'prefecture_id' => '34',
            'kanji' => '庄原市',
            'kana' => 'しょうばらし',
            'romaji' => 'shoubarashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 810
        City::insert([
            'prefecture_id' => '34',
            'kanji' => '世羅町',
            'kana' => 'せらちょう',
            'romaji' => 'serachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 811
        City::insert([
            'prefecture_id' => '34',
            'kanji' => '竹原市',
            'kana' => 'たけはらし',
            'romaji' => 'takeharashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 812
        City::insert([
            'prefecture_id' => '34',
            'kanji' => '廿日市市',
            'kana' => 'はつかいちし',
            'romaji' => 'hatsukaichishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 813
        City::insert([
            'prefecture_id' => '34',
            'kanji' => '東広島市',
            'kana' => 'ひがしひろしまし',
            'romaji' => 'higashihiroshimashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 814
        City::insert([
            'prefecture_id' => '34',
            'kanji' => '広島市',
            'kana' => 'ひろしまし',
            'romaji' => 'hiroshimashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 815
        City::insert([
            'prefecture_id' => '34',
            'kanji' => '福山市',
            'kana' => 'ふくやまし',
            'romaji' => 'fukuyamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 816
        City::insert([
            'prefecture_id' => '34',
            'kanji' => '府中市',
            'kana' => 'ふちゅうし',
            'romaji' => 'fuchuushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 817
        City::insert([
            'prefecture_id' => '34',
            'kanji' => '府中町',
            'kana' => 'ふちゅうちょう',
            'romaji' => 'fuchuuchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 818
        City::insert([
            'prefecture_id' => '34',
            'kanji' => '三原市',
            'kana' => 'みはらし',
            'romaji' => 'miharashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 819
        City::insert([
            'prefecture_id' => '34',
            'kanji' => '三次市',
            'kana' => 'みよしし',
            'romaji' => 'miyoshishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 820
        City::insert([
            'prefecture_id' => '35',
            'kanji' => '阿武町',
            'kana' => 'あぶちょう',
            'romaji' => 'abuchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 821
        City::insert([
            'prefecture_id' => '35',
            'kanji' => '岩国市',
            'kana' => 'いわくにし',
            'romaji' => 'iwakunishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 822
        City::insert([
            'prefecture_id' => '35',
            'kanji' => '宇部市',
            'kana' => 'うべし',
            'romaji' => 'ubeshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 823
        City::insert([
            'prefecture_id' => '35',
            'kanji' => '下松市',
            'kana' => 'くだまつし',
            'romaji' => 'kudamatsushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 824
        City::insert([
            'prefecture_id' => '35',
            'kanji' => '山陽小野田市',
            'kana' => 'さんようおのだし',
            'romaji' => 'sanyouonodashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 825
        City::insert([
            'prefecture_id' => '35',
            'kanji' => '下関市',
            'kana' => 'しものせきし',
            'romaji' => 'shimonosekishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 826
        City::insert([
            'prefecture_id' => '35',
            'kanji' => '周南市',
            'kana' => 'しゅうなんし',
            'romaji' => 'shuunanshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 827
        City::insert([
            'prefecture_id' => '35',
            'kanji' => '田布施町',
            'kana' => 'たぶせちょう',
            'romaji' => 'tabusechou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 828
        City::insert([
            'prefecture_id' => '35',
            'kanji' => '長門市',
            'kana' => 'ながとし',
            'romaji' => 'nagatoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 829
        City::insert([
            'prefecture_id' => '35',
            'kanji' => '萩市',
            'kana' => 'はぎし',
            'romaji' => 'hagishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 830
        City::insert([
            'prefecture_id' => '35',
            'kanji' => '光市',
            'kana' => 'ひかりし',
            'romaji' => 'hikarishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 831
        City::insert([
            'prefecture_id' => '35',
            'kanji' => '防府市',
            'kana' => 'ほうふし',
            'romaji' => 'houfushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 832
        City::insert([
            'prefecture_id' => '35',
            'kanji' => '美祢市',
            'kana' => 'みねし',
            'romaji' => 'mineshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 833
        City::insert([
            'prefecture_id' => '35',
            'kanji' => '柳井市',
            'kana' => 'やないし',
            'romaji' => 'yanaishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 834
        City::insert([
            'prefecture_id' => '35',
            'kanji' => '山口市',
            'kana' => 'やまぐちし',
            'romaji' => 'yamaguchishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 835
        City::insert([
            'prefecture_id' => '35',
            'kanji' => '和木町',
            'kana' => 'わきちょう',
            'romaji' => 'wakichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 836
        City::insert([
            'prefecture_id' => '36',
            'kanji' => '藍住町',
            'kana' => 'あいずみちょう',
            'romaji' => 'aizumichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 837
        City::insert([
            'prefecture_id' => '36',
            'kanji' => '阿南市',
            'kana' => 'あなんし',
            'romaji' => 'ananshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 838
        City::insert([
            'prefecture_id' => '36',
            'kanji' => '石井町',
            'kana' => 'いしいちょう',
            'romaji' => 'ishiichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 839
        City::insert([
            'prefecture_id' => '36',
            'kanji' => '板野町',
            'kana' => 'いたのちょう',
            'romaji' => 'itanochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 840
        City::insert([
            'prefecture_id' => '36',
            'kanji' => '海陽町',
            'kana' => 'かいようちょう',
            'romaji' => 'kaiyouchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 841
        City::insert([
            'prefecture_id' => '36',
            'kanji' => '小松島市',
            'kana' => 'こまつしまし',
            'romaji' => 'komatsushimashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 842
        City::insert([
            'prefecture_id' => '36',
            'kanji' => 'つるぎ町',
            'kana' => 'つるぎちょう',
            'romaji' => 'tsurugichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 843
        City::insert([
            'prefecture_id' => '36',
            'kanji' => '徳島市',
            'kana' => 'とくしまし',
            'romaji' => 'tokushimashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 844
        City::insert([
            'prefecture_id' => '36',
            'kanji' => '鳴門市',
            'kana' => 'なるとし',
            'romaji' => 'narutoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 845
        City::insert([
            'prefecture_id' => '36',
            'kanji' => '東みよし町',
            'kana' => 'ひがしみよしちょう',
            'romaji' => 'higashimiyoshichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 846
        City::insert([
            'prefecture_id' => '36',
            'kanji' => '美波町',
            'kana' => 'みなみちょう',
            'romaji' => 'minamichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 847
        City::insert([
            'prefecture_id' => '36',
            'kanji' => '美馬市',
            'kana' => 'みまし',
            'romaji' => 'mimashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 848
        City::insert([
            'prefecture_id' => '36',
            'kanji' => '三好市',
            'kana' => 'みよしし',
            'romaji' => 'miyoshishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 849
        City::insert([
            'prefecture_id' => '36',
            'kanji' => '牟岐町',
            'kana' => 'むぎちょう',
            'romaji' => 'mugichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 850
        City::insert([
            'prefecture_id' => '36',
            'kanji' => '吉野川市',
            'kana' => 'よしのがわし',
            'romaji' => 'yoshinogawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 851
        City::insert([
            'prefecture_id' => '37',
            'kanji' => '宇多津町',
            'kana' => 'うたづちょう',
            'romaji' => 'utazuchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 852
        City::insert([
            'prefecture_id' => '37',
            'kanji' => '観音寺市',
            'kana' => 'かんおんじし',
            'romaji' => 'kan\'onjishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 853
        City::insert([
            'prefecture_id' => '37',
            'kanji' => '琴平町',
            'kana' => 'ことひらちょう',
            'romaji' => 'kotohirachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 854
        City::insert([
            'prefecture_id' => '37',
            'kanji' => '坂出市',
            'kana' => 'さかいでし',
            'romaji' => 'sakaideshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 855
        City::insert([
            'prefecture_id' => '37',
            'kanji' => 'さぬき市',
            'kana' => 'さぬきし',
            'romaji' => 'sanukishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 856
        City::insert([
            'prefecture_id' => '37',
            'kanji' => '善通寺市',
            'kana' => 'ぜんつうじし',
            'romaji' => 'zentsuujishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 857
        City::insert([
            'prefecture_id' => '37',
            'kanji' => '高松市',
            'kana' => 'たかまつし',
            'romaji' => 'takamatsushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 858
        City::insert([
            'prefecture_id' => '37',
            'kanji' => '多度津町',
            'kana' => 'たどつちょう',
            'romaji' => 'tadotsuchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 859
        City::insert([
            'prefecture_id' => '37',
            'kanji' => '東かがわ市',
            'kana' => 'ひがしかがわし',
            'romaji' => 'higashikagawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 860
        City::insert([
            'prefecture_id' => '37',
            'kanji' => '丸亀市',
            'kana' => 'まるがめし',
            'romaji' => 'marugameshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 861
        City::insert([
            'prefecture_id' => '37',
            'kanji' => 'まんのう町',
            'kana' => 'まんのうちょう',
            'romaji' => 'mannouchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 862
        City::insert([
            'prefecture_id' => '37',
            'kanji' => '三豊市',
            'kana' => 'みとよし',
            'romaji' => 'mitoyoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 863
        City::insert([
            'prefecture_id' => '38',
            'kanji' => '今治市',
            'kana' => 'いまばりし',
            'romaji' => 'imabarishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 864
        City::insert([
            'prefecture_id' => '38',
            'kanji' => '伊予市',
            'kana' => 'いよし',
            'romaji' => 'iyoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 865
        City::insert([
            'prefecture_id' => '38',
            'kanji' => '内子町',
            'kana' => 'うちこちょう',
            'romaji' => 'uchikochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 866
        City::insert([
            'prefecture_id' => '38',
            'kanji' => '宇和島市',
            'kana' => 'うわじまし',
            'romaji' => 'uwajimashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 867
        City::insert([
            'prefecture_id' => '38',
            'kanji' => '大洲市',
            'kana' => 'おおずし',
            'romaji' => 'oozushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 868
        City::insert([
            'prefecture_id' => '38',
            'kanji' => '鬼北町',
            'kana' => 'きほくちょう',
            'romaji' => 'kihokuchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 869
        City::insert([
            'prefecture_id' => '38',
            'kanji' => '西条市',
            'kana' => 'さいじょうし',
            'romaji' => 'saijoushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 870
        City::insert([
            'prefecture_id' => '38',
            'kanji' => '四国中央市',
            'kana' => 'しこくちゅうおうし',
            'romaji' => 'shikokuchuuoushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 871
        City::insert([
            'prefecture_id' => '38',
            'kanji' => '西予市',
            'kana' => 'せいよし',
            'romaji' => 'seiyoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 872
        City::insert([
            'prefecture_id' => '38',
            'kanji' => '新居浜市',
            'kana' => 'にいはまし',
            'romaji' => 'niihamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 873
        City::insert([
            'prefecture_id' => '38',
            'kanji' => '松前町',
            'kana' => 'まさきちょう',
            'romaji' => 'masakichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 874
        City::insert([
            'prefecture_id' => '38',
            'kanji' => '松野町',
            'kana' => 'まつのちょう',
            'romaji' => 'matsunochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 875
        City::insert([
            'prefecture_id' => '38',
            'kanji' => '松山市',
            'kana' => 'まつやまし',
            'romaji' => 'matsuyamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 876
        City::insert([
            'prefecture_id' => '38',
            'kanji' => '八幡浜市',
            'kana' => 'やわたはまし',
            'romaji' => 'yawatahamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 877
        City::insert([
            'prefecture_id' => '39',
            'kanji' => 'いの町',
            'kana' => 'いのちょう',
            'romaji' => 'inochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 878
        City::insert([
            'prefecture_id' => '39',
            'kanji' => '大豊町',
            'kana' => 'おおとよちょう',
            'romaji' => 'ootoyochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 879
        City::insert([
            'prefecture_id' => '39',
            'kanji' => '香美市',
            'kana' => 'かみし',
            'romaji' => 'kamishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 880
        City::insert([
            'prefecture_id' => '39',
            'kanji' => '高知市',
            'kana' => 'こうちし',
            'romaji' => 'kouchishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 881
        City::insert([
            'prefecture_id' => '39',
            'kanji' => '佐川町',
            'kana' => 'さかわちょう',
            'romaji' => 'sakawachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 882
        City::insert([
            'prefecture_id' => '39',
            'kanji' => '四万十市',
            'kana' => 'しまんとし',
            'romaji' => 'shimantoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 883
        City::insert([
            'prefecture_id' => '39',
            'kanji' => '四万十町',
            'kana' => 'しまんとちょう',
            'romaji' => 'shimantochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 884
        City::insert([
            'prefecture_id' => '39',
            'kanji' => '須崎市',
            'kana' => 'すさきし',
            'romaji' => 'susakishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 885
        City::insert([
            'prefecture_id' => '39',
            'kanji' => '中土佐町',
            'kana' => 'なかとさちょう',
            'romaji' => 'nakatosachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 886
        City::insert([
            'prefecture_id' => '39',
            'kanji' => '南国市',
            'kana' => 'なんこくし',
            'romaji' => 'nankokushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 887
        City::insert([
            'prefecture_id' => '39',
            'kanji' => '日高村',
            'kana' => 'ひだかむら',
            'romaji' => 'hidakamura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 888
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '飯塚市',
            'kana' => 'いいづかし',
            'romaji' => 'iizukashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 889
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '糸島市',
            'kana' => 'いとしまし',
            'romaji' => 'itoshimashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 890
        City::insert([
            'prefecture_id' => '40',
            'kanji' => 'うきは市',
            'kana' => 'うきはし',
            'romaji' => 'ukihashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 891
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '宇美町',
            'kana' => 'うみまち',
            'romaji' => 'umimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 892
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '大野城市',
            'kana' => 'おおのじょうし',
            'romaji' => 'oonojoushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 893
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '大牟田市',
            'kana' => 'おおむたし',
            'romaji' => 'oomutashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 894
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '岡垣町',
            'kana' => 'おかがきまち',
            'romaji' => 'okagakimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 895
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '遠賀町',
            'kana' => 'おんがちょう',
            'romaji' => 'ongachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 896
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '春日市',
            'kana' => 'かすがし',
            'romaji' => 'kasugashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 897
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '粕屋町',
            'kana' => 'かすやまち',
            'romaji' => 'kasuyamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 898
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '嘉麻市',
            'kana' => 'かまし',
            'romaji' => 'kamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 899
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '川崎町',
            'kana' => 'かわさきまち',
            'romaji' => 'kawasakimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 900
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '香春町',
            'kana' => 'かわらまち',
            'romaji' => 'kawaramachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 901
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '苅田町',
            'kana' => 'かんだまち',
            'romaji' => 'kandamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 902
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '北九州市',
            'kana' => 'きたきゅうしゅうし',
            'romaji' => 'kitakyuushuushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 903
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '鞍手町',
            'kana' => 'くらてまち',
            'romaji' => 'kuratemachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 904
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '久留米市',
            'kana' => 'くるめし',
            'romaji' => 'kurumeshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 905
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '桂川町',
            'kana' => 'けいせんまち',
            'romaji' => 'keisenmachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 906
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '古賀市',
            'kana' => 'こがし',
            'romaji' => 'kogashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 907
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '小竹町',
            'kana' => 'こたけまち',
            'romaji' => 'kotakemachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 908
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '篠栗町',
            'kana' => 'ささぐりまち',
            'romaji' => 'sasagurimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 909
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '新宮町',
            'kana' => 'しんぐうまち',
            'romaji' => 'shinguumachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 910
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '須恵町',
            'kana' => 'すえまち',
            'romaji' => 'suemachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 911
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '添田町',
            'kana' => 'そえだまち',
            'romaji' => 'soedamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 912
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '田川市',
            'kana' => 'たがわし',
            'romaji' => 'tagawashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 913
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '太宰府市',
            'kana' => 'だざいふし',
            'romaji' => 'dazaifushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 914
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '筑後市',
            'kana' => 'ちくごし',
            'romaji' => 'chikugoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 915
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '筑紫野市',
            'kana' => 'ちくしのし',
            'romaji' => 'chikushinoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 916
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '築上町',
            'kana' => 'ちくじょうまち',
            'romaji' => 'chikujoumachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 917
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '東峰村',
            'kana' => 'とうほうむら',
            'romaji' => 'touhoumura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 918
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '中間市',
            'kana' => 'なかまし',
            'romaji' => 'nakamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 919
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '直方市',
            'kana' => 'のおがたし',
            'romaji' => 'noogatashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 920
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '福岡市',
            'kana' => 'ふくおかし',
            'romaji' => 'fukuokashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 921
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '福津市',
            'kana' => 'ふくつし',
            'romaji' => 'fukutsushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 922
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '豊前市',
            'kana' => 'ぶぜんし',
            'romaji' => 'buzenshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 923
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '水巻町',
            'kana' => 'みずまきまち',
            'romaji' => 'mizumakimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 924
        City::insert([
            'prefecture_id' => '40',
            'kanji' => 'みやま市',
            'kana' => 'みやまし',
            'romaji' => 'miyamashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 925
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '宗像市',
            'kana' => 'むなかたし',
            'romaji' => 'munakatashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 926
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '行橋市',
            'kana' => 'ゆくはしし',
            'romaji' => 'yukuhashishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 927
        City::insert([
            'prefecture_id' => '40',
            'kanji' => '吉富町',
            'kana' => 'よしとみまち',
            'romaji' => 'yoshitomimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 928
        City::insert([
            'prefecture_id' => '41',
            'kanji' => '有田町',
            'kana' => 'ありたちょう',
            'romaji' => 'aritachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 929
        City::insert([
            'prefecture_id' => '41',
            'kanji' => '伊万里市',
            'kana' => 'いまりし',
            'romaji' => 'imarishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 930
        City::insert([
            'prefecture_id' => '41',
            'kanji' => '大町町',
            'kana' => 'おおまちちょう',
            'romaji' => 'oomachichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 931
        City::insert([
            'prefecture_id' => '41',
            'kanji' => '小城市',
            'kana' => 'おぎし',
            'romaji' => 'ogishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 932
        City::insert([
            'prefecture_id' => '41',
            'kanji' => '鹿島市',
            'kana' => 'かしまし',
            'romaji' => 'kashimashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 933
        City::insert([
            'prefecture_id' => '41',
            'kanji' => '唐津市',
            'kana' => 'からつし',
            'romaji' => 'karatsushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 934
        City::insert([
            'prefecture_id' => '41',
            'kanji' => '神埼市',
            'kana' => 'かんざきし',
            'romaji' => 'kanzakishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 935
        City::insert([
            'prefecture_id' => '41',
            'kanji' => '基山町',
            'kana' => 'きやまちょう',
            'romaji' => 'kiyamachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 936
        City::insert([
            'prefecture_id' => '41',
            'kanji' => '江北町',
            'kana' => 'こうほくまち',
            'romaji' => 'kouhokumachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 937
        City::insert([
            'prefecture_id' => '41',
            'kanji' => '佐賀市',
            'kana' => 'さがし',
            'romaji' => 'sagashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 938
        City::insert([
            'prefecture_id' => '41',
            'kanji' => '白石町',
            'kana' => 'しろいしちょう',
            'romaji' => 'shiroishichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 939
        City::insert([
            'prefecture_id' => '41',
            'kanji' => '多久市',
            'kana' => 'たくし',
            'romaji' => 'takushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 940
        City::insert([
            'prefecture_id' => '41',
            'kanji' => '武雄市',
            'kana' => 'たけおし',
            'romaji' => 'takeoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 941
        City::insert([
            'prefecture_id' => '41',
            'kanji' => '太良町',
            'kana' => 'たらちょう',
            'romaji' => 'tarachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 942
        City::insert([
            'prefecture_id' => '41',
            'kanji' => '鳥栖市',
            'kana' => 'とすし',
            'romaji' => 'tosushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 943
        City::insert([
            'prefecture_id' => '41',
            'kanji' => 'みやき町',
            'kana' => 'みやきちょう',
            'romaji' => 'miyakichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 944
        City::insert([
            'prefecture_id' => '41',
            'kanji' => '吉野ヶ里町',
            'kana' => 'よしのがりちょう',
            'romaji' => 'yoshinogarichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 945
        City::insert([
            'prefecture_id' => '42',
            'kanji' => '諫早市',
            'kana' => 'いさはやし',
            'romaji' => 'isahayashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 946
        City::insert([
            'prefecture_id' => '42',
            'kanji' => '大村市',
            'kana' => 'おおむらし',
            'romaji' => 'oomurashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 947
        City::insert([
            'prefecture_id' => '42',
            'kanji' => '川棚町',
            'kana' => 'かわたなちょう',
            'romaji' => 'kawatanachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 948
        City::insert([
            'prefecture_id' => '42',
            'kanji' => '佐世保市',
            'kana' => 'させぼし',
            'romaji' => 'saseboshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 949
        City::insert([
            'prefecture_id' => '42',
            'kanji' => '長崎市',
            'kana' => 'ながさきし',
            'romaji' => 'nagasakishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 950
        City::insert([
            'prefecture_id' => '42',
            'kanji' => '長与町',
            'kana' => 'ながよちょう',
            'romaji' => 'nagayochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 951
        City::insert([
            'prefecture_id' => '42',
            'kanji' => '東彼杵町',
            'kana' => 'ひがしそのぎちょう',
            'romaji' => 'higashisonogichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 952
        City::insert([
            'prefecture_id' => '43',
            'kanji' => '芦北町',
            'kana' => 'あしきたまち',
            'romaji' => 'ashikitamachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 953
        City::insert([
            'prefecture_id' => '43',
            'kanji' => '阿蘇市',
            'kana' => 'あそし',
            'romaji' => 'asoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 954
        City::insert([
            'prefecture_id' => '43',
            'kanji' => '荒尾市',
            'kana' => 'あらおし',
            'romaji' => 'araoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 955
        City::insert([
            'prefecture_id' => '43',
            'kanji' => '宇城市',
            'kana' => 'うきし',
            'romaji' => 'ukishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 956
        City::insert([
            'prefecture_id' => '43',
            'kanji' => '宇土市',
            'kana' => 'うとし',
            'romaji' => 'utoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 957
        City::insert([
            'prefecture_id' => '43',
            'kanji' => '大津町',
            'kana' => 'おおづまち',
            'romaji' => 'oozumachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 958
        City::insert([
            'prefecture_id' => '43',
            'kanji' => '菊陽町',
            'kana' => 'きくようまち',
            'romaji' => 'kikuyoumachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 959
        City::insert([
            'prefecture_id' => '43',
            'kanji' => '玉東町',
            'kana' => 'ぎょくとうまち',
            'romaji' => 'gyokutoumachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 960
        City::insert([
            'prefecture_id' => '43',
            'kanji' => '球磨村',
            'kana' => 'くまむら',
            'romaji' => 'kumamura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 961
        City::insert([
            'prefecture_id' => '43',
            'kanji' => '熊本市',
            'kana' => 'くまもとし',
            'romaji' => 'kumamotoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 962
        City::insert([
            'prefecture_id' => '43',
            'kanji' => '玉名市',
            'kana' => 'たまなし',
            'romaji' => 'tamanashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 963
        City::insert([
            'prefecture_id' => '43',
            'kanji' => '長洲町',
            'kana' => 'ながすまち',
            'romaji' => 'nagasumachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 964
        City::insert([
            'prefecture_id' => '43',
            'kanji' => '人吉市',
            'kana' => 'ひとよしし',
            'romaji' => 'hitoyoshishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 965
        City::insert([
            'prefecture_id' => '43',
            'kanji' => '水俣市',
            'kana' => 'みなまたし',
            'romaji' => 'minamatashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 966
        City::insert([
            'prefecture_id' => '43',
            'kanji' => '南阿蘇村',
            'kana' => 'みなみあそむら',
            'romaji' => 'minamiasomura',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 967
        City::insert([
            'prefecture_id' => '43',
            'kanji' => '八代市',
            'kana' => 'やつしろし',
            'romaji' => 'yatsushiroshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 968
        City::insert([
            'prefecture_id' => '44',
            'kanji' => '宇佐市',
            'kana' => 'うさし',
            'romaji' => 'usashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 969
        City::insert([
            'prefecture_id' => '44',
            'kanji' => '臼杵市',
            'kana' => 'うすきし',
            'romaji' => 'usukishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 970
        City::insert([
            'prefecture_id' => '44',
            'kanji' => '大分市',
            'kana' => 'おおいたし',
            'romaji' => 'ooitashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 971
        City::insert([
            'prefecture_id' => '44',
            'kanji' => '杵築市',
            'kana' => 'きつきし',
            'romaji' => 'kitsukishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 972
        City::insert([
            'prefecture_id' => '44',
            'kanji' => '玖珠町',
            'kana' => 'くすまち',
            'romaji' => 'kusumachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 973
        City::insert([
            'prefecture_id' => '44',
            'kanji' => '九重町',
            'kana' => 'ここのえまち',
            'romaji' => 'kokonoemachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 974
        City::insert([
            'prefecture_id' => '44',
            'kanji' => '佐伯市',
            'kana' => 'さいきし',
            'romaji' => 'saikishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 975
        City::insert([
            'prefecture_id' => '44',
            'kanji' => '竹田市',
            'kana' => 'たけたし',
            'romaji' => 'taketashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 976
        City::insert([
            'prefecture_id' => '44',
            'kanji' => '津久見市',
            'kana' => 'つくみし',
            'romaji' => 'tsukumishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 977
        City::insert([
            'prefecture_id' => '44',
            'kanji' => '中津市',
            'kana' => 'なかつし',
            'romaji' => 'nakatsushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 978
        City::insert([
            'prefecture_id' => '44',
            'kanji' => '日出町',
            'kana' => 'ひじまち',
            'romaji' => 'hijimachi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 979
        City::insert([
            'prefecture_id' => '44',
            'kanji' => '日田市',
            'kana' => 'ひたし',
            'romaji' => 'hitashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 980
        City::insert([
            'prefecture_id' => '44',
            'kanji' => '豊後大野市',
            'kana' => 'ぶんごおおのし',
            'romaji' => 'bungooonoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 981
        City::insert([
            'prefecture_id' => '44',
            'kanji' => '別府市',
            'kana' => 'べっぷし',
            'romaji' => 'beppushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 982
        City::insert([
            'prefecture_id' => '44',
            'kanji' => '由布市',
            'kana' => 'ゆふし',
            'romaji' => 'yufushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 983
        City::insert([
            'prefecture_id' => '45',
            'kanji' => 'えびの市',
            'kana' => 'えびのし',
            'romaji' => 'ebinoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 984
        City::insert([
            'prefecture_id' => '45',
            'kanji' => '門川町',
            'kana' => 'かどがわちょう',
            'romaji' => 'kadogawachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 985
        City::insert([
            'prefecture_id' => '45',
            'kanji' => '川南町',
            'kana' => 'かわみなみちょう',
            'romaji' => 'kawaminamichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 986
        City::insert([
            'prefecture_id' => '45',
            'kanji' => '串間市',
            'kana' => 'くしまし',
            'romaji' => 'kushimashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 987
        City::insert([
            'prefecture_id' => '45',
            'kanji' => '小林市',
            'kana' => 'こばやしし',
            'romaji' => 'kobayashishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 988
        City::insert([
            'prefecture_id' => '45',
            'kanji' => '新富町',
            'kana' => 'しんとみちょう',
            'romaji' => 'shintomichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 989
        City::insert([
            'prefecture_id' => '45',
            'kanji' => '高鍋町',
            'kana' => 'たかなべちょう',
            'romaji' => 'takanabechou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 990
        City::insert([
            'prefecture_id' => '45',
            'kanji' => '高原町',
            'kana' => 'たかはるちょう',
            'romaji' => 'takaharuchou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 991
        City::insert([
            'prefecture_id' => '45',
            'kanji' => '都農町',
            'kana' => 'つのちょう',
            'romaji' => 'tsunochou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 992
        City::insert([
            'prefecture_id' => '45',
            'kanji' => '日南市',
            'kana' => 'にちなんし',
            'romaji' => 'nichinanshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 993
        City::insert([
            'prefecture_id' => '45',
            'kanji' => '延岡市',
            'kana' => 'のべおかし',
            'romaji' => 'nobeokashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 994
        City::insert([
            'prefecture_id' => '45',
            'kanji' => '日向市',
            'kana' => 'ひゅうがし',
            'romaji' => 'hyuugashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 995
        City::insert([
            'prefecture_id' => '45',
            'kanji' => '三股町',
            'kana' => 'みまたちょう',
            'romaji' => 'mimatachou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 996
        City::insert([
            'prefecture_id' => '45',
            'kanji' => '都城市',
            'kana' => 'みやこのじょうし',
            'romaji' => 'miyakonojoushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 997
        City::insert([
            'prefecture_id' => '45',
            'kanji' => '宮崎市',
            'kana' => 'みやざきし',
            'romaji' => 'miyazakishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 998
        City::insert([
            'prefecture_id' => '46',
            'kanji' => '姶良市',
            'kana' => 'あいらし',
            'romaji' => 'airashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 999
        City::insert([
            'prefecture_id' => '46',
            'kanji' => '出水市',
            'kana' => 'いずみし',
            'romaji' => 'izumishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 1000
        City::insert([
            'prefecture_id' => '46',
            'kanji' => 'いちき串木野市',
            'kana' => 'いちきくしきのし',
            'romaji' => 'ichikikushikinoshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 1001
        City::insert([
            'prefecture_id' => '46',
            'kanji' => '指宿市',
            'kana' => 'いぶすきし',
            'romaji' => 'ibusukishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 1002
        City::insert([
            'prefecture_id' => '46',
            'kanji' => '鹿児島市',
            'kana' => 'かごしまし',
            'romaji' => 'kagoshimashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 1003
        City::insert([
            'prefecture_id' => '46',
            'kanji' => '霧島市',
            'kana' => 'きりしまし',
            'romaji' => 'kirishimashi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 1004
        City::insert([
            'prefecture_id' => '46',
            'kanji' => '薩摩川内市',
            'kana' => 'さつませんだいし',
            'romaji' => 'satsumasendaishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 1005
        City::insert([
            'prefecture_id' => '46',
            'kanji' => '志布志市',
            'kana' => 'しぶしし',
            'romaji' => 'shibushishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 1006
        City::insert([
            'prefecture_id' => '46',
            'kanji' => '曽於市',
            'kana' => 'そおし',
            'romaji' => 'sooshi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 1007
        City::insert([
            'prefecture_id' => '46',
            'kanji' => '日置市',
            'kana' => 'ひおきし',
            'romaji' => 'hiokishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 1008
        City::insert([
            'prefecture_id' => '46',
            'kanji' => '枕崎市',
            'kana' => 'まくらざきし',
            'romaji' => 'makurazakishi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 1009
        City::insert([
            'prefecture_id' => '46',
            'kanji' => '南九州市',
            'kana' => 'みなみきゅうしゅうし',
            'romaji' => 'minamikyuushuushi',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        // id: 1010
        City::insert([
            'prefecture_id' => '46',
            'kanji' => '湧水町',
            'kana' => 'ゆうすいちょう',
            'romaji' => 'yuusuichou',
            'created_at' => $date,
            'updated_at' => $date,
        ]);
    }
}
