<?php

namespace FlexiPeehp\Bricks\ConvertRules;

/**
 * Description of FakturaVydana_to_FakturaVydana
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class FakturaVydana_to_FakturaVydana extends \FlexiPeeHP\Bricks\ConvertorRule
{
    public $rules = [
        'kod' => 'kod',
//        'cisDosle' => 'cisDosle',
        'varSym' => 'varSym',
        'cisSml' => 'cisSml',
//        'cisObj' => 'cisObj',
//        'datObj' => 'datObj',
//        'cisDodak' => 'cisDodak',
//        'doprava' => 'doprava',
//        'datVyst' => 'datVyst',
//        'duzpPuv' => 'duzpPuv',
//        'duzpUcto' => 'duzpUcto',
//        'datSplat' => 'datSplat',
//        'datTermin' => 'datTermin',
//        'datReal' => 'datReal',
        'popis' => 'popis',
        'poznam' => 'poznam',
        'uvodTxt' => 'uvodTxt',
        'zavTxt' => 'zavTxt',
//        'sumOsv' => 'sumOsv',
//        'sumZklSniz' => 'sumZklSniz',
//        'sumZklSniz2' => 'sumZklSniz2',
//        'sumZklZakl' => 'sumZklZakl',
//        'sumDphSniz' => 'sumDphSniz',
//        'sumDphSniz2' => 'sumDphSniz2',
//        'sumDphZakl' => 'sumDphZakl',
//        'sumCelkSniz' => 'sumCelkSniz',
//        'sumCelkSniz2' => 'sumCelkSniz2',
//        'sumCelkZakl' => 'sumCelkZakl',
//        'sumCelkem' => 'sumCelkem',
//        'sumOsvMen' => 'sumOsvMen',
//        'sumZklSnizMen' => 'sumZklSnizMen',
//        'sumZklSniz2Men' => 'sumZklSniz2Men',
//        'sumZklZaklMen' => 'sumZklZaklMen',
//        'sumDphZaklMen' => 'sumDphZaklMen',
//        'sumDphSnizMen' => 'sumDphSnizMen',
//        'sumDphSniz2Men' => 'sumDphSniz2Men',
//        'sumCelkSnizMen' => 'sumCelkSnizMen',
//        'sumCelkSniz2Men' => 'sumCelkSniz2Men',
//        'sumCelkZaklMen' => 'sumCelkZaklMen',
//        'sumCelkemMen' => 'sumCelkemMen',
          'slevaDokl' => 'slevaDokl',
//        'kurz' => 'kurz',
//        'kurzMnozstvi' => 'kurzMnozstvi',
//        'stavUzivK' => 'stavUzivK',
//        'nazFirmy' => 'nazFirmy',
//        'ulice' => 'ulice',
//        'mesto' => 'mesto',
//        'psc' => 'psc',
//        'eanKod' => 'eanKod',
//        'ic' => 'ic',
//        'dic' => 'dic',
//        'postovniShodna' => 'postovniShodna',
//        'faNazev' => 'faNazev',
//        'faNazev2' => 'faNazev2',
//        'faUlice' => 'faUlice',
//        'faMesto' => 'faMesto',
//        'faPsc' => 'faPsc',
//        'faEanKod' => 'faEanKod',
//        'buc' => 'buc',
//        'iban' => 'iban',
//        'bic' => 'bic',
//        'specSym' => 'specSym',
//        'bezPolozek' => 'bezPolozek',
//        'szbDphSniz' => 'szbDphSniz',
//        'szbDphSniz2' => 'szbDphSniz2',
//        'szbDphZakl' => 'szbDphZakl',
//        'uzpTuzemsko' => 'uzpTuzemsko',
//        'datUcto' => 'datUcto',
//        'vyloucitSaldo' => 'vyloucitSaldo',
//        'zaokrJakSumK' => 'zaokrJakSumK',
//        'zaokrNaSumK' => 'zaokrNaSumK',
//        'zaokrJakDphK' => 'zaokrJakDphK',
//        'zaokrNaDphK' => 'zaokrNaDphK',
//        'stitky' => 'stitky',
//        'typDokl' => 'typDokl',
        'mena' => 'mena',
//        'konSym' => 'konSym',
        'firma' => 'firma',
        'stat' => 'stat',
//        'faStat' => 'faStat',
//        'mistUrc' => 'mistUrc',
//        'banSpojDod' => 'banSpojDod',
//        'bankovniUcet' => 'bankovniUcet',
//        'typUcOp' => 'typUcOp',
//        'primUcet' => 'primUcet',
//        'protiUcet' => 'protiUcet',
//        'dphZaklUcet' => 'dphZaklUcet',
//        'dphSnizUcet' => 'dphSnizUcet',
//        'dphSniz2Ucet' => 'dphSniz2Ucet',
//        'smerKod' => 'smerKod',
//        'statDph' => 'statDph',
//        'clenDph' => 'clenDph',
        'stredisko' => 'stredisko',
        'cinnost' => 'cinnost',
        'zakazka' => 'zakazka',
//        'statOdesl' => 'statOdesl',
//        'statUrc' => 'statUrc',
//        'statPuvod' => 'statPuvod',
//        'dodPodm' => 'dodPodm',
//        'obchTrans' => 'obchTrans',
//        'druhDopr' => 'druhDopr',
//        'zvlPoh' => 'zvlPoh',
//        'krajUrc' => 'krajUrc',
//        'zodpOsoba' => 'zodpOsoba',
//        'kontaktOsoba' => 'kontaktOsoba',
//        'kontaktJmeno' => 'kontaktJmeno',
//        'kontaktEmail' => 'kontaktEmail',
//        'kontaktTel' => 'kontaktTel',
//        'rada' => 'rada',
//        'smlouva' => 'smlouva',
//        'formaDopravy' => 'formaDopravy',
//        'source' => 'source',
//        'balikPocet' => 'balikPocet',
//        'balikZacislovan' => 'balikZacislovan',
//        'balikVytvXml' => 'balikVytvXml',
//        'clenKonVykDph' => 'clenKonVykDph',
//        'datUp1' => 'datUp1',
//        'datUp2' => 'datUp2',
//        'datSmir' => 'datSmir',
//        'datPenale' => 'datPenale',
//        'formaUhradyCis' => 'formaUhradyCis',
//        'stavUhrK' => 'stavUhrK',
//        'juhSumPp' => 'juhSumPp',
//        'juhSumPpMen' => 'juhSumPpMen',
//        'sumPrepl' => 'sumPrepl',
//        'sumPreplMen' => 'sumPreplMen',
//        'hromFakt' => 'hromFakt',
//        'zdrojProSkl' => 'zdrojProSkl',
//        'prodejka' => 'prodejka',
//        'stavMailK' => 'stavMailK',
//        'dobropisovano' => 'dobropisovano',
//        'sumCelkemBezZaloh' => 'sumCelkemBezZaloh',
//        'sumCelkemBezZalohMen' => 'sumCelkemBezZalohMen',
//        'odpocAuto' => 'odpocAuto',
//        'eetDicPoverujiciho' => 'eetDicPoverujiciho',
//        'eetFik' => 'eetFik',
//        'eetPkp' => 'eetPkp',
//        'eetPokladniZarizeni' => 'eetPokladniZarizeni',
//        'eetProvozovna' => 'eetProvozovna',
//        'eetTypK' => 'eetTypK',
//        'eetDatCasTrzby' => 'eetDatCasTrzby',
//        'eetTisknoutPkp' => 'eetTisknoutPkp',
//        'typDoklSkl' => 'typDoklSkl',
       'polozkyFaktury' =>
        [
//            'ucetni' => 'ucetni',
            'kod' => 'kod',
            'eanKod' => 'eanKod',
            'nazev' => 'nazev',
            'nazevA' => 'nazevA',
            'nazevB' => 'nazevB',
            'nazevC' => 'nazevC',
//            'cisRad' => 'cisRad',
            'typPolozkyK' => 'typPolozkyK',
//            'baleniId' => 'baleniId',
//            'mnozBaleni' => 'mnozBaleni',
            'mnozMj' => 'mnozMj',
            'typCenyDphK' => 'typCenyDphK',
            'typSzbDphK' => 'typSzbDphK',
//            'szbDph' => 'szbDph', https://podpora.flexibee.eu/knowledge-bases/2/articles/13617-jaky-je-rozdil-mezi-atributy-szbdph-a-typszbdphk-u-polozek-faktur
            'cenaMj' => 'cenaMj',
            'slevaPol' => 'slevaPol',
//            'uplSlevaDokl' => 'uplSlevaDokl',
//            'sumZkl' => 'sumZkl',
//            'sumDph' => 'sumDph',
//            'sumCelkem' => 'sumCelkem',
//            'sumZklMen' => 'sumZklMen',
//            'sumDphMen' => 'sumDphMen',
//            'sumCelkemMen' => 'sumCelkemMen',
//            'objem' => 'objem',
//            'cenJednotka' => 'cenJednotka',
//            'typVypCenyK' => 'typVypCenyK',
//            'cenaMjNakup' => 'cenaMjNakup',
//            'cenaMjProdej' => 'cenaMjProdej',
//            'cenaMjCenikTuz' => 'cenaMjCenikTuz',
//            'procZakl' => 'procZakl',
//            'slevaMnoz' => 'slevaMnoz',
//            'zaokrJakK' => 'zaokrJakK',
//            'zaokrNaK' => 'zaokrNaK',
//            'sarze' => 'sarze',
//            'expirace' => 'expirace',
//            'datTrvan' => 'datTrvan',
//            'datVyroby' => 'datVyroby',
//            'stavUzivK' => 'stavUzivK',
            'poznam' => 'poznam',
//            'kopZklMdUcet' => 'kopZklMdUcet',
//            'kopZklDalUcet' => 'kopZklDalUcet',
//            'kopDphMdUcet' => 'kopDphMdUcet',
//            'kopDphDalUcet' => 'kopDphDalUcet',
//            'kopTypUcOp' => 'kopTypUcOp',
//            'kopZakazku' => 'kopZakazku',
//            'kopStred' => 'kopStred',
//            'kopCinnost' => 'kopCinnost',
//            'kopKlice' => 'kopKlice',
//            'kopClenDph' => 'kopClenDph',
//            'kopDatUcto' => 'kopDatUcto',
//            'datUcto' => 'datUcto',
//            'sklad' => 'sklad',
            'stredisko' => 'stredisko',
            'cinnost' => 'cinnost',
//            'typUcOp' => 'typUcOp',
//            'zklMdUcet' => 'zklMdUcet',
//            'zklDalUcet' => 'zklDalUcet',
//            'dphMdUcet' => 'dphMdUcet',
//            'dphDalUcet' => 'dphDalUcet',
//            'zakazka' => 'zakazka',
//            'dodavatel' => 'dodavatel',
//            'clenDph' => 'clenDph',
//            'dphPren' => 'dphPren',
            'cenik' => 'cenik',
//            'cenHlad' => 'cenHlad',
            'mj' => 'mj',
//            'mjObjem' => 'mjObjem',
//            'sazbaDphPuv' => 'sazbaDphPuv',
            'stitky' => 'stitky',
//            'source' => 'source',
//            'clenKonVykDph' => 'clenKonVykDph',
//            'kopClenKonVykDph' => 'kopClenKonVykDph',
//            'ciselnyKodZbozi' => 'ciselnyKodZbozi',
//            'druhZbozi' => 'druhZbozi',
//            'poplatekParentPolFak' => 'poplatekParentPolFak',
//            'zdrojProSkl' => 'zdrojProSkl',
//            'zaloha' => 'zaloha',
//            'sumVedlNaklIntrMen' => 'sumVedlNaklIntrMen',
//            'eetTypPlatbyK' => 'eetTypPlatbyK',
        ],
    ];

}
