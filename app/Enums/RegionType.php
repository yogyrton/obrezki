<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

final class RegionType extends Enum implements LocalizedEnum
{
    const MINSK = 1;
    const MINSKAYA = 2;
    const VITEBSKAYA = 3;
    const MOGILEVSKAYA = 4;
    const BRESTSKAYA = 5;
    const GRODNENSKAYA = 6;
    const GOMELSKAYA = 7;

    public static function getCityes(int $region)
    {
        return match ($region) {
            self::MINSK => [
                CityType::FRUNZ,
                CityType::MOSC,
                CityType::OCT,
                CityType::ZAVOD,
                CityType::PARTIZAN,
                CityType::CENTRAL,
                CityType::SOVIET,
                CityType::LENIN,
                CityType::PERVOMAI,
            ],

            self::MINSKAYA => [
                CityType::MINSK,
                CityType::BEREZINO,
                CityType::BORISOV,
                CityType::VILEYKA,
                CityType::VOLOZHIN,
                CityType::GHODINO,
                CityType::DERZHINSK,
                CityType::KLETSK,
                CityType::KOPYL,
                CityType::KRUPKI,
                CityType::LOGOYSK,
                CityType::LUBAN,
                CityType::MAR_HORKA,
                CityType::MOLODECHNO,
                CityType::MYADEL,
                CityType::NESVIG,
                CityType::PUCHOVICHI,
                CityType::SLUTSK,
                CityType::SMOLEVICHI,
                CityType::SOLIGORSK,
                CityType::ST_DOROGI,
                CityType::STOLBTSY,
                CityType::UZDA,
                CityType::CHERVEN,
            ],

            self::VITEBSKAYA => [
                CityType::VITEBSK,
                CityType::BRASLAV,
                CityType::BESHENKOVICHY,
                CityType::VERCHNEDVINSK,
                CityType::GLUBOKOE,
                CityType::GORODOK,
                CityType::DOKSHYTSY,
                CityType::DUBROVNO,
                CityType::LEPEL,
                CityType::LIOZNO,
                CityType::MIORY,
                CityType::ORSHA,
                CityType::POLOTSK,
                CityType::POSTAVY,
                CityType::ROSSONY,
                CityType::SENNO,
                CityType::TOLOCHIN,
                CityType::USHACHI,
                CityType::CHASHNIKI,
                CityType::SHARKOVSCHINA,
                CityType::SHUMILINO,
                CityType::NOVOLUKOML,
                CityType::NOVOPOLOTSK,
            ],

            self::MOGILEVSKAYA => [
                CityType::MOGILEV,
                CityType::BELYNYCHI,
                CityType::BOBRUISK,
                CityType::BYKHOV,
                CityType::GORKY,
                CityType::DRYBIN,
                CityType::KIROVSK,
                CityType::KLIMOVICHI,
                CityType::KOSTYKOVICHI,
                CityType::KRACNOPOLIE,
                CityType::KRICHEV,
                CityType::KRUGLOE,
                CityType::MSTISLAVL,
                CityType::OSIPOVICHI,
                CityType::SLAVGOROD,
                CityType::KHOTIMSK,
                CityType::CHAUSY,
                CityType::CHERIKOV,
                CityType::SHKLOV,
            ],

            self::BRESTSKAYA => [
                CityType::BREST,
                CityType::BARANOVICHI,
                CityType::BEREZA,
                CityType::GANCEVICHY,
                CityType::DROGICHIN,
                CityType::GHABINKA,
                CityType::IVANOVO,
                CityType::IVACEVICHY,
                CityType::KAMENETS,
                CityType::KOBRIN,
                CityType::LUNINETS,
                CityType::LYACHOVICHY,
                CityType::MALORITA,
                CityType::PINSK,
                CityType::PRYGHANY,
                CityType::STOLYN,
            ],

            self::GRODNENSKAYA => [
                CityType::GRODNO,
                CityType::BERESTOVITSA,
                CityType::VOLKOVYSK,
                CityType::VORONOVO,
                CityType::DYATLOVO,
                CityType::ZELVA,
                CityType::IVUE,
                CityType::KORELICHY,
                CityType::LIDA,
                CityType::MOSTY,
                CityType::NOVOGRUDOK,
                CityType::OSHMZNY,
                CityType::OSTROVETS,
                CityType::SVISLOTCH,
                CityType::SLONYM,
                CityType::SMORGON,
                CityType::SCHYCHIN,
            ],

            self::GOMELSKAYA => [
                CityType::GOMEL,
                CityType::BRAGIN,
                CityType::BUDA_KOSHELEVO,
                CityType::VETKA,
                CityType::DOBRYSH,
                CityType::ELSK,
                CityType::GHITKOVICHI,
                CityType::GHLOBIN,
                CityType::KALINKOVICHI,
                CityType::KORMA,
                CityType::LELCHITSY,
                CityType::LOEV,
                CityType::MOZYR,
                CityType::NAROVLYA,
                CityType::OKTYABRSKIY,
                CityType::PETRIKOV,
                CityType::RECHITSA,
                CityType::ROGACHEV,
                CityType::SVETLOGORSK,
                CityType::KHOYNIKI,
                CityType::CHECHERSK,
            ],
        };
    }
}
