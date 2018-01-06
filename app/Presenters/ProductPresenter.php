<?php
namespace App\Presenters;

class ProductPresenter
{
    public static function seriesCategory($id)
    {
        switch($id) {
            case 1:
                echo "愛情羅曼史漫畫";
                break;
            case 80:
                echo "青年漫畫";
                break;
            case 84:
                echo "輕熟女漫畫";
                break;
            case 95:
                echo "女優寫真";
                break;
            case 96:
                echo "少女漫畫";
                break;
            case 117:
                echo "經典小說";
                break;
            case 133:
                echo "少年漫畫";
                break;
            case 140:
                echo "言情小說";
                break;
            case 143:
                echo "恐怖漫畫";
                break;
            case 149:
                echo "武俠小說";
                break;
            case 152:
                echo "恐怖小說";
                break;
            case 154:
                echo "趣味寫真";
                break;
            case 162:
                echo "耽美BL漫畫";
                break;
            case 163:
                echo "耽美小說";
                break;
            case 193:
                echo "輕小說";
                break;
            case 290:
                echo "原創小說";
                break;
        }
    }

    public static function seriesBrand($id)
    {
        switch ($id) {
            case 1:
                echo "SB creative";
                break;
            case 2:
                echo "G2Comix";
                break;
            case 3:
                echo "KINTON JAPAN";
                break;
            case 4:	
                echo "COMIC CYUTT";
                break;
            case 5:	
                echo "Moby-Dick Digital";
                break;
            case 6:	
                echo "渡部製作所，Moby-Dick Digital";
                break;
            case 7:	
                echo "狗屋出版社";
                break;
            case 8:	
                echo "未來數位";
                break;
            case 9:	
                echo "禾馬文化";
                break;
            case 10:	
                echo "桑尤姆的部屋";
                break;
            case 11:	
                echo "LEED";
                break;
            case 12:	
                echo "明日工作室";
                break;
            case 13:	
                echo "PAD";
                break;
            case 14:	
                echo "WPOP";
                break;
            case 15:	
                echo "Mag-GardenPOP";
                break;
            case 16:	
                echo "秋水社POP";
                break;
            case 17:
                echo "Mobydick（g2comix）";
                break;
            case 18:
                echo "龍馬文化";
                break;
            case 19:	
                echo "シュークリームPOP";
                break;
            case 20:
                echo "亂搭！MyRenta！";
                break;
            case 21:
                echo "モバイルメディアリサーチ";
                break;
            case 22:
                echo "激ちゅぱっ";
                break;
            case 23:
                echo "Bevy";
                break;
            case 24:
                echo "大翼文化";
                break;
            case 25:
                echo "松文館";
                break;
            case 26:	
                echo "グループ·ゼロ";
                break;
            case 27:	
                echo "スクリーモ";
                break;
            case 28:
                echo "Creators Guild/Moby-Dick";
                break;
            case 29:
                echo "果樹出版社";
                break;
            case 30:
                echo "新書館POP";
                break;
            case 31:
                echo "LEED/Moby-Dick";
                break;
            case 32:
                echo "笠倉出版社";
                break;
            case 33:
                echo "グループ・ゼロ";
                break;
            case 34:
                echo "LEED / Moby-Dick";
                break;
            case 35:
                echo "オトメチカPOP";
                break;
            case 36:
                echo "OrangeVox";
                break;
            case 37:
                echo "長鴻出版";
                break;
            case 38:
                echo "アイプロダクション";
                break;
            case 39:
                echo "銘顯文化";
                break;
            case 40:
                echo "長鴻出版社";
                break;
            case 41:
                echo "丹陽文化";
                break;
            case 42:	
                echo "COMIC維新";
                break;
            case 43:
                echo "モバイルメディアリサーチPOP";
                break;
            case 44:
                echo "綠川明";
                break;
            case 45:
                echo "遙心";
                break;
            case 46:
                echo "大洋図書";
                break;
            case 47:
                echo "新書館";
                break;
            case 48:
                echo "玖錚";
                break;
            case 49:
                echo "玖琤";
                break;
            case 50:
                echo "マッグガーデンPOP";
                break;
            case 51:
                echo "東京漫画社POP";
                break;
            case 52:
                echo "100";
                break;
            case 53:	
                echo "飛燕文創";
                break;
            case 54:	
                echo "双葉社";
                break;
            case 55:
                echo "少年画報社";
                break;
            case 56:
                echo "長鴻出版社&双葉社";
                break;
            case 57:
                echo "長鴻出版社&少年画報社";
                break;
            case 58:
                echo "耕林出版社";
                break;
            case 59:
                echo "長鴻小說";
                break;
            case 60:
                echo "大誠社";
                break;
            case 61:
                echo "シガリロ";
                break;
            case 62:
                echo "恋愛ショコラ";
                break;
            case 63:
                echo "ラブスイーツ";
                break;
            case 64:
                echo "KATTS";
                break;
            case 65:
                echo "Bコミ";
                break;
            case 66:
                echo "qap";
                break;
            case 67:
                echo "日本文芸社";
                break;
            case 68:
                echo "希代多媒體書版";
                break;
            case 69:
                echo "DeNIMO";
                break;
            case 70:
                echo "OrangeVoxPOP";
                break;
            case 71:
                echo "長鴻出版社&講談社";
                break;
            case 72:
                echo "WコミックスZR";
                break;
            case 73:
                echo "宙出版";
                break;
            case 74:
                echo "尖端出版社";
                break;
            case 75:
                echo "長鴻出版社&集英社";
                break;
        }
    }

    public static function isAdult($flag)
    {
        switch($flag) {
            case 0:
                echo "否";
                break;
            case 1:
                echo "是";
                break;
        }
    }
}