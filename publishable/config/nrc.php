<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Characters
    |--------------------------------------------------------------------------
    |
    | Change 'english' characters as you like
    | 'Ka' to "KA" or something
    */
    'characters' => [
        'က' => 'Ka',
        'ခ' => 'Kha',
        'ဂ' => 'Ga',
        'ဃ' => 'Gha',
        'င' => 'Nga',
        'စ' => 'Sa',
        'ဆ' => 'Hsa',
        'ဇ' => 'Za',
        'ဈ' => 'Zha',
        'ည' => 'Nya',
        'ဎ' => 'Dd',
        'ဏ' => 'Nha',
        'တ' => 'Ta',
        'ထ' => 'Hta',
        'ဒ' => 'Da',
        'ဓ' => 'Dha',
        'န' => 'Na',
        'ပ' => 'Pa',
        'ဖ' => 'Pha',
        'ဗ' => 'Bha',
        'ဘ' => 'Ba',
        'မ' => 'Ma',
        'ယ' => 'Ya',
        'ရ' => 'Ra',
        'လ' => 'La',
        'ဝ' => 'Wa',
        'သ' => 'Tha',
        'ဟ' => 'Ha',
        'ဠ' => 'Ll',
        'အ' => 'Ah',
        'ဥ' => 'U',
        'ဧ' => 'E',
    ],

    /*
    |--------------------------------------------------------------------------
    | Regions and States
    |--------------------------------------------------------------------------
    |
    | Change 'region_en' and 'region_mm' as you like
    | Don't change id
    */
    'regions_states' => [
        [
            'id' => 1,
            'region_en' => '1',            // 'Kachin'
            'region_mm' => '၁',            // 'ကချင်ပြည်နယ်'
        ],
        [
            'id' => 2,
            'region_en' => '2',            // 'Kayah'
            'region_mm' => '၂',            // ကယားပြည်နယ်
        ],
        [
            'id' => 3,
            'region_en' => '3',            // 'Kayin'
            'region_mm' => '၃',            // 'ကရင်ပြည်နယ်'
        ],
        [
            'id' => 4,
            'region_en' => '4',            // 'Chin'
            'region_mm' => '၄',            //	'ချင်းပြည်နယ်'
        ],
        [
            'id' => 5,
            'region_en' => '5',            // 'Sagaing'
            'region_mm' => '၅',            //	'စစ်ကိုင်းတိုင်း'
        ],
        [
            'id' => 6,
            'region_en' => '6',            // 'Tanintharyi'
            'region_mm' => '၆',            //	'တနင်္သာရီတိုင်း'
        ],
        [
            'id' => 7,
            'region_en' => '7',            // 'Bago'
            'region_mm' => '၇',            //	'ပဲခူးတိုင္း'
        ],
        [
            'id' => 8,
            'region_en' => '8',            // 'Magway'
            'region_mm' => '၈',            //	'မကွေးတိုင်း'
        ],
        [
            'id' => 9,
            'region_en' => '9',            // 'Mandalay'
            'region_mm' => '၉',            //	'မန္တလေးတိုင်း'
        ],
        [
            'id' => 10,
            'region_en' => '10',        // 'Mon'
            'region_mm' => '၁၀',            //	'မွန်ပြည်နယ်'
        ],
        [
            'id' => 11,
            'region_en' => '11',        // 'Rakhine'
            'region_mm' => '၁၁',            //	'ရခိုင်ပြည်နယ်'
        ],
        [
            'id' => 12,
            'region_en' => '12',        //	'Yangon'
            'region_mm' => '၁၂',            //	'ရန်ကုန်တိုင်း'
        ],
        [
            'id' => 13,
            'region_en' => '13',        // 'Shan'
            'region_mm' => '၁၃',            //	'ရှမ်းပြည်နယ်'
        ],
        [
            'id' => 14,
            'region_en' => '14',        // 'Ayeyawady'
            'region_mm' => '၁၄',            //	'ဧရာဝတီတိုင်း'
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Citizens
    |--------------------------------------------------------------------------
    |
    | Change 'citizen_en' and 'citizen_mm' as you like
    */
    'citizens' => [
        [
            'citizen_en' => 'N',
            'citizen_mm' => 'နိုင်',
        ],
        [
            'citizen_en' => 'E',
            'citizen_mm' => 'ဧည့်',
        ],
        [
            'citizen_en' => 'P',
            'citizen_mm' => 'ပြု',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Townships for every regions and states
    |--------------------------------------------------------------------------
    */
    'townships' => [
        [
            // 'id' => 1,
            'region_id' => 1,
            'township_mm' => 'ကမတ',
        ],
        [
            // 'id' => 2,
            'region_id' => 1,
            'township_mm' => 'ကမန',
        ],
        [
            // 'id' => 2,
            'region_id' => 1,
            'township_mm' => 'ကလဖ',
        ],
        [
            // 'id' => 3,
            'region_id' => 1,
            'township_mm' => 'ခဖန',
        ],
        [
            // 'id' => 4,
            'region_id' => 1,
            'township_mm' => 'ခဘဒ',
        ],
        [
            // 'id' => 5,
            'region_id' => 1,
            'township_mm' => 'ခလဖ',
        ],
        [
            // 'id' => 6,
            'region_id' => 1,
            'township_mm' => 'ဆဒန',
        ],
        [
            // 'id' => 7,
            'region_id' => 1,
            'township_mm' => 'ဆပဘ',
        ],
        [
            // 'id' => 7,
            'region_id' => 1,
            'township_mm' => 'ဆဘန',
        ],
        [
            // 'id' => 8,
            'region_id' => 1,
            'township_mm' => 'ဆလန',
        ],
        [
            // 'id' => 9,
            'region_id' => 1,
            'township_mm' => 'တနန',
        ],
        [
            // 'id' => 10,
            'region_id' => 1,
            'township_mm' => 'ဒဖယ',
        ],
        [
            // 'id' => 11,
            'region_id' => 1,
            'township_mm' => 'နမန',
        ],
        [
            // 'id' => 12,
            'region_id' => 1,
            'township_mm' => 'ပတအ',
        ],
        [
            // 'id' => 13,
            'region_id' => 1,
            'township_mm' => 'ဖကန',
        ],
        [
            // 'id' => 14,
            'region_id' => 1,
            'township_mm' => 'ဗမန',
        ],
        [
            // 'id' => 15,
            'region_id' => 1,
            'township_mm' => 'မကတ',
        ],
        [
            // 'id' => 16,
            'region_id' => 1,
            'township_mm' => 'မကန',
        ],
        [
            // 'id' => 17,
            'region_id' => 1,
            'township_mm' => 'မခဘ',
        ],
        [
            // 'id' => 18,
            'region_id' => 1,
            'township_mm' => 'မစန',
        ],
        [
            // 'id' => 19,
            'region_id' => 1,
            'township_mm' => 'မညန',
        ],
        [
            // 'id' => 20,
            'region_id' => 1,
            'township_mm' => 'မပန',
        ],
        [
            // 'id' => 21,
            'region_id' => 1,
            'township_mm' => 'မမန',
        ],
        [
            // 'id' => 22,
            'region_id' => 1,
            'township_mm' => 'ရကန',
        ],
        [
            // 'id' => 23,
            'region_id' => 1,
            'township_mm' => 'လဂန',
        ],
        [
            // 'id' => 24,
            'region_id' => 1,
            'township_mm' => 'ဝမန',
        ],
        [
            // 'id' => 25,
            'region_id' => 1,
            'township_mm' => 'ဟပန',
        ],
        [
            // 'id' => 26,
            'region_id' => 1,
            'township_mm' => 'အဂယ',
        ],
        [
            // 'id' => 27,
            'region_id' => 2,
            'township_mm' => 'ဒမဆ',
        ],
        [
            // 'id' => 28,
            'region_id' => 2,
            'township_mm' => 'ဖဆန',
        ],
        [
            // 'id' => 29,
            'region_id' => 2,
            'township_mm' => 'ဖရဆ',
        ],
        [
            // 'id' => 30,
            'region_id' => 2,
            'township_mm' => 'ဘလခ',
        ],
        [
            // 'id' => 31,
            'region_id' => 2,
            'township_mm' => 'မစန',
        ],
        [
            // 'id' => 32,
            'region_id' => 2,
            'township_mm' => 'ရတန',
        ],
        [
            // 'id' => 33,
            'region_id' => 2,
            'township_mm' => 'လကန',
        ],
        [
            // 'id' => 34,
            'region_id' => 3,
            'township_mm' => 'ကကရ',
        ],
        [
            // 'id' => 35,
            'region_id' => 3,
            'township_mm' => 'ကဆက',
        ],
        [
            // 'id' => 35,
            'region_id' => 3,
            'township_mm' => 'ကမမ',
        ],
        [
            // 'id' => 35,
            'region_id' => 3,
            'township_mm' => 'ကဒန',
        ],
        [
            // 'id' => 35,
            'region_id' => 3,
            'township_mm' => 'ကဆက',
        ],
        [
            // 'id' => 35,
            'region_id' => 3,
            'township_mm' => 'စကလ',
        ],
        [
            // 'id' => 7,
            'region_id' => 3,
            'township_mm' => 'ပကန',
        ],
        [
            // 'id' => 36,
            'region_id' => 3,
            'township_mm' => 'ဖပန',
        ],
        [
            // 'id' => 37,
            'region_id' => 3,
            'township_mm' => 'ဖအန',
        ],
        [
            // 'id' => 38,
            'region_id' => 3,
            'township_mm' => 'ဘဂလ',
        ],
        [
            // 'id' => 38,
            'region_id' => 3,
            'township_mm' => 'ဘသစ',
        ],
        [
            // 'id' => 39,
            'region_id' => 3,
            'township_mm' => 'ဘအန',
        ],
        [
            // 'id' => 40,
            'region_id' => 3,
            'township_mm' => 'မဝတ',
        ],
        [
            // 'id' => 32,
            'region_id' => 3,
            'township_mm' => 'ရရသ',
        ],
        [
            // 'id' => 41,
            'region_id' => 3,
            'township_mm' => 'လဘန',
        ],
        [
            // 'id' => 41,
            'region_id' => 3,
            'township_mm' => 'လသန',
        ],
        [
            // 'id' => 41,
            'region_id' => 3,
            'township_mm' => 'ဝလမ',
        ],
        [
            // 'id' => 42,
            'region_id' => 3,
            'township_mm' => 'သတန',
        ],
        [
            // 'id' => 42,
            'region_id' => 3,
            'township_mm' => 'သတက',
        ],
        [
            // 'id' => 43,
            'region_id' => 4,
            'township_mm' => 'ကပလ',
        ],
        [
            // 'id' => 44,
            'region_id' => 4,
            'township_mm' => 'တဇန',
        ],
        [
            // 'id' => 45,
            'region_id' => 4,
            'township_mm' => 'တတန',
        ],
        [
            // 'id' => 46,
            'region_id' => 4,
            'township_mm' => 'ထတလ',
        ],
        [
            // 'id' => 47,
            'region_id' => 4,
            'township_mm' => 'ပလဝ',
        ],
        [
            // 'id' => 48,
            'region_id' => 4,
            'township_mm' => 'ဖလန',
        ],
        [
            // 'id' => 49,
            'region_id' => 4,
            'township_mm' => 'မတန',
        ],
        [
            // 'id' => 50,
            'region_id' => 4,
            'township_mm' => 'မတပ',
        ],
        [
            // 'id' => 51,
            'region_id' => 4,
            'township_mm' => 'ဟခန',
        ],
        [
            // 'id' => 52,
            'region_id' => 5,
            'township_mm' => 'ကနန',
        ],
        [
            // 'id' => 53,
            'region_id' => 5,
            'township_mm' => 'ကဘလ',
        ],
        [
            // 'id' => 53,
            'region_id' => 5,
            'township_mm' => 'ကမန',
        ],
        [
            // 'id' => 54,
            'region_id' => 5,
            'township_mm' => 'ကလတ',
        ],
        [
            // 'id' => 55,
            'region_id' => 5,
            'township_mm' => 'ကလထ',
        ],
        [
            // 'id' => 56,
            'region_id' => 5,
            'township_mm' => 'ကလန',
        ],
        [
            // 'id' => 57,
            'region_id' => 5,
            'township_mm' => 'ကလဝ',
        ],
        [
            // 'id' => 58,
            'region_id' => 5,
            'township_mm' => 'ကသန',
        ],
        [
            // 'id' => 59,
            'region_id' => 5,
            'township_mm' => 'ခတန',
        ],
        [
            // 'id' => 60,
            'region_id' => 5,
            'township_mm' => 'ခဥတ',
        ],
        [
            // 'id' => 61,
            'region_id' => 5,
            'township_mm' => 'ခဥန',
        ],
        [
            // 'id' => 62,
            'region_id' => 5,
            'township_mm' => 'ငဇန',
        ],
        [
            // 'id' => 63,
            'region_id' => 5,
            'township_mm' => 'စကတ',
        ],
        [
            // 'id' => 64,
            'region_id' => 5,
            'township_mm' => 'စကန',
        ],
        [
            // 'id' => 64,
            'region_id' => 5,
            'township_mm' => 'စမရ',
        ],
        [
            // 'id' => 65,
            'region_id' => 5,
            'township_mm' => 'ဆလက',
        ],
        [
            // 'id' => 66,
            'region_id' => 5,
            'township_mm' => 'တဆန',
        ],
        [
            // 'id' => 67,
            'region_id' => 5,
            'township_mm' => 'တမန',
        ],
        [
            // 'id' => 68,
            'region_id' => 5,
            'township_mm' => 'ထခန',
        ],
        [
            // 'id' => 68,
            'region_id' => 5,
            'township_mm' => 'ထပခ',
        ],
        [
            // 'id' => 69,
            'region_id' => 5,
            'township_mm' => 'ဒပယ',
        ],
        [
            // 'id' => 69,
            'region_id' => 5,
            'township_mm' => 'ဒဟန',
        ],
        [
            // 'id' => 70,
            'region_id' => 5,
            'township_mm' => 'နယန',
        ],
        [
            // 'id' => 71,
            'region_id' => 5,
            'township_mm' => 'ပစန',
        ],
        [
            // 'id' => 71,
            'region_id' => 5,
            'township_mm' => 'ပလန',
        ],
        [
            // 'id' => 72,
            'region_id' => 5,
            'township_mm' => 'ပလဘ',
        ],
        [
            // 'id' => 73,
            'region_id' => 5,
            'township_mm' => 'ဖပန',
        ],
        [
            // 'id' => 74,
            'region_id' => 5,
            'township_mm' => 'ဗမန',
        ],
        [
            // 'id' => 75,
            'region_id' => 5,
            'township_mm' => 'ဘတလ',
        ],
        [
            // 'id' => 76,
            'region_id' => 5,
            'township_mm' => 'မကန',
        ],
        [
            // 'id' => 77,
            'region_id' => 5,
            'township_mm' => 'မပလ',
        ],
        [
            // 'id' => 77,
            'region_id' => 5,
            'township_mm' => 'မမတ',
        ],
        [
            // 'id' => 78,
            'region_id' => 5,
            'township_mm' => 'မမန',
        ],
        [
            // 'id' => 79,
            'region_id' => 5,
            'township_mm' => 'မရန',
        ],
        [
            // 'id' => 80,
            'region_id' => 5,
            'township_mm' => 'မလန',
        ],
        [
            // 'id' => 81,
            'region_id' => 5,
            'township_mm' => 'မသန',
        ],
        [
            // 'id' => 82,
            'region_id' => 5,
            'township_mm' => 'ယမပ',
        ],
        [
            // 'id' => 83,
            'region_id' => 5,
            'township_mm' => 'ရဘန',
        ],
        [
            // 'id' => 84,
            'region_id' => 5,
            'township_mm' => 'ရဥန',
        ],
        [
            // 'id' => 85,
            'region_id' => 5,
            'township_mm' => 'လယန',
        ],
        [
            // 'id' => 86,
            'region_id' => 5,
            'township_mm' => 'လရန',
        ],
        [
            // 'id' => 87,
            'region_id' => 5,
            'township_mm' => 'လဟန',
        ],
        [
            // 'id' => 88,
            'region_id' => 5,
            'township_mm' => 'ဝလန',
        ],
        [
            // 'id' => 89,
            'region_id' => 5,
            'township_mm' => 'ဝသန',
        ],
        [
            // 'id' => 90,
            'region_id' => 5,
            'township_mm' => 'ဟမလ',
        ],
        [
            // 'id' => 91,
            'region_id' => 5,
            'township_mm' => 'အတန',
        ],
        [
            // 'id' => 92,
            'region_id' => 5,
            'township_mm' => 'အရတ',
        ],
        [
            // 'id' => 93,
            'region_id' => 6,
            'township_mm' => 'ကစန',
        ],
        [
            // 'id' => 94,
            'region_id' => 6,
            'township_mm' => 'ကသန',
        ],
        [
            // 'id' => 95,
            'region_id' => 6,
            'township_mm' => 'တသရ',
        ],
        [
            // 'id' => 96,
            'region_id' => 6,
            'township_mm' => 'ထဝန',
        ],
        [
            // 'id' => 97,
            'region_id' => 6,
            'township_mm' => 'ပလန',
        ],
        [
            // 'id' => 98,
            'region_id' => 6,
            'township_mm' => 'ဘပန',
        ],
        [
            // 'id' => 99,
            'region_id' => 6,
            'township_mm' => 'မမန',
        ],
        [
            // 'id' => 100,
            'region_id' => 6,
            'township_mm' => 'မအန',
        ],
        [
            // 'id' => 101,
            'region_id' => 6,
            'township_mm' => 'မအရ',
        ],
        [
            // 'id' => 102,
            'region_id' => 6,
            'township_mm' => 'ရဖန',
        ],
        [
            // 'id' => 103,
            'region_id' => 6,
            'township_mm' => 'လလန',
        ],
        [
            // 'id' => 104,
            'region_id' => 6,
            'township_mm' => 'သရခ',
        ],
        [
            // 'id' => 105,
            'region_id' => 7,
            'township_mm' => 'ကကန',
        ],
        [
            // 'id' => 106,
            'region_id' => 7,
            'township_mm' => 'ကတခ',
        ],
        [
            // 'id' => 106,
            'region_id' => 7,
            'township_mm' => 'ကသခ',
        ],
        [
            // 'id' => 107,
            'region_id' => 7,
            'township_mm' => 'ကပက',
        ],
        [
            // 'id' => 108,
            'region_id' => 7,
            'township_mm' => 'ကဝန',
        ],
        [
            // 'id' => 109,
            'region_id' => 7,
            'township_mm' => 'ဇကန',
        ],
        [
            // 'id' => 110,
            'region_id' => 7,
            'township_mm' => 'ညလပ',
        ],
        [
            // 'id' => 111,
            'region_id' => 7,
            'township_mm' => 'တငန',
        ],
        [
            // 'id' => 112,
            'region_id' => 7,
            'township_mm' => 'ထတပ',
        ],
        [
            // 'id' => 113,
            'region_id' => 7,
            'township_mm' => 'ဒဥန',
        ],
        [
            // 'id' => 114,
            'region_id' => 7,
            'township_mm' => 'နတလ',
        ],
        [
            // 'id' => 115,
            'region_id' => 7,
            'township_mm' => 'ပခတ',
        ],
        [
            // 'id' => 116,
            'region_id' => 7,
            'township_mm' => 'ပခန',
        ],
        [
            // 'id' => 117,
            'region_id' => 7,
            'township_mm' => 'ပတတ',
        ],
        [
            // 'id' => 118,
            'region_id' => 7,
            'township_mm' => 'ပတန',
        ],
        [
            // 'id' => 119,
            'region_id' => 7,
            'township_mm' => 'ပမန',
        ],
        [
            // 'id' => 120,
            'region_id' => 7,
            'township_mm' => 'ဖမန',
        ],
        [
            // 'id' => 121,
            'region_id' => 7,
            'township_mm' => 'မညန',
        ],
        [
            // 'id' => 122,
            'region_id' => 7,
            'township_mm' => 'မလန',
        ],
        [
            // 'id' => 123,
            'region_id' => 7,
            'township_mm' => 'ရကန',
        ],
        [
            // 'id' => 124,
            'region_id' => 7,
            'township_mm' => 'ရတန',
        ],
        [
            // 'id' => 125,
            'region_id' => 7,
            'township_mm' => 'ရတရ',
        ],
        [
            // 'id' => 126,
            'region_id' => 7,
            'township_mm' => 'လပတ',
        ],
        [
            // 'id' => 127,
            'region_id' => 7,
            'township_mm' => 'ဝမန',
        ],
        [
            // 'id' => 128,
            'region_id' => 7,
            'township_mm' => 'သကန',
        ],
        [
            // 'id' => 129,
            'region_id' => 7,
            'township_mm' => 'သနပ',
        ],
        [
            // 'id' => 130,
            'region_id' => 7,
            'township_mm' => 'သဝတ',
        ],
        [
            // 'id' => 131,
            'region_id' => 7,
            'township_mm' => 'အတန',
        ],
        [
            // 'id' => 132,
            'region_id' => 7,
            'township_mm' => 'အဖန',
        ],
        [
            // 'id' => 132,
            'region_id' => 7,
            'township_mm' => 'ဥတန',
        ],
        [
            // 'id' => 133,
            'region_id' => 8,
            'township_mm' => 'ကမန',
        ],
        [
            // 'id' => 133,
            'region_id' => 8,
            'township_mm' => 'ကထန',
        ],
        [
            // 'id' => 134,
            'region_id' => 8,
            'township_mm' => 'ခမန',
        ],
        [
            // 'id' => 135,
            'region_id' => 8,
            'township_mm' => 'ဂဂန',
        ],
        [
            // 'id' => 136,
            'region_id' => 8,
            'township_mm' => 'ငဖန',
        ],
        [
            // 'id' => 137,
            'region_id' => 8,
            'township_mm' => 'စတရ',
        ],
        [
            // 'id' => 138,
            'region_id' => 8,
            'township_mm' => 'စလန',
        ],
        [
            // 'id' => 139,
            'region_id' => 8,
            'township_mm' => 'ဆလန',
        ],
        [
            // 'id' => 140,
            'region_id' => 8,
            'township_mm' => 'ဆပ၀',
        ],
        [
            // 'id' => 141,
            'region_id' => 8,
            'township_mm' => 'ဆဖန',
        ],
        [
            // 'id' => 142,
            'region_id' => 8,
            'township_mm' => 'ဆမန',
        ],
        [
            // 'id' => 143,
            'region_id' => 8,
            'township_mm' => 'တတက',
        ],
        [
            // 'id' => 144,
            'region_id' => 8,
            'township_mm' => 'ထလန',
        ],
        [
            // 'id' => 145,
            'region_id' => 8,
            'township_mm' => 'နမန',
        ],
        [
            // 'id' => 146,
            'region_id' => 8,
            'township_mm' => 'ပခက',
        ],
        [
            // 'id' => 147,
            'region_id' => 8,
            'township_mm' => 'ပဖန',
        ],
        [
            // 'id' => 148,
            'region_id' => 8,
            'township_mm' => 'ပမန',
        ],
        [
            // 'id' => 149,
            'region_id' => 8,
            'township_mm' => 'မကန',
        ],
        [
            // 'id' => 150,
            'region_id' => 8,
            'township_mm' => 'မတန',
        ],
        [
            // 'id' => 151,
            'region_id' => 8,
            'township_mm' => 'မထန',
        ],
        [
            // 'id' => 152,
            'region_id' => 8,
            'township_mm' => 'မဘန',
        ],
        [
            // 'id' => 153,
            'region_id' => 8,
            'township_mm' => 'မမန',
        ],
        [
            // 'id' => 154,
            'region_id' => 8,
            'township_mm' => 'မလန',
        ],
        [
            // 'id' => 155,
            'region_id' => 8,
            'township_mm' => 'မသန',
        ],
        [
            // 'id' => 156,
            'region_id' => 8,
            'township_mm' => 'ရစက',
        ],
        [
            // 'id' => 157,
            'region_id' => 8,
            'township_mm' => 'ရနခ',
        ],
        [
            // 'id' => 158,
            'region_id' => 8,
            'township_mm' => 'သရန',
        ],
        [
            // 'id' => 159,
            'region_id' => 8,
            'township_mm' => 'အလန',
        ],
        [
            // 'id' => 160,
            'region_id' => 9,
            'township_mm' => 'ကဆန',
        ],
        [
            // 'id' => 161,
            'region_id' => 9,
            'township_mm' => 'ကပတ',
        ],
        [
            // 'id' => 162,
            'region_id' => 9,
            'township_mm' => 'ခမစ',
        ],
        [
            // 'id' => 163,
            'region_id' => 9,
            'township_mm' => 'ခမသ',
        ],
        [
            // 'id' => 164,
            'region_id' => 9,
            'township_mm' => 'ခအဇ',
        ],
        [
            // 'id' => 165,
            'region_id' => 9,
            'township_mm' => 'ငဇန',
        ],
        [
            // 'id' => 166,
            'region_id' => 9,
            'township_mm' => 'ငသရ',
        ],
        [
            // 'id' => 167,
            'region_id' => 9,
            'township_mm' => 'စကတ',
        ],
        [
            // 'id' => 168,
            'region_id' => 9,
            'township_mm' => 'စကန',
        ],
        [
            // 'id' => 169,
            'region_id' => 9,
            'township_mm' => 'ဇဗသ',
        ],
        [
            // 'id' => 170,
            'region_id' => 9,
            'township_mm' => 'ဇယသ',
        ],
        [
            // 'id' => 171,
            'region_id' => 9,
            'township_mm' => 'ညဥန',
        ],
        [
            // 'id' => 172,
            'region_id' => 9,
            'township_mm' => 'တကန',
        ],
        [
            // 'id' => 173,
            'region_id' => 9,
            'township_mm' => 'တတန',
        ],
        [
            // 'id' => 174,
            'region_id' => 9,
            'township_mm' => 'တတဥ',
        ],
        [
            // 'id' => 175,
            'region_id' => 9,
            'township_mm' => 'တသန',
        ],
        [
            // 'id' => 176,
            'region_id' => 9,
            'township_mm' => 'ဒခသ',
        ],
        [
            // 'id' => 177,
            'region_id' => 9,
            'township_mm' => 'နထက',
        ],
        [
            // 'id' => 178,
            'region_id' => 9,
            'township_mm' => 'ပကခ',
        ],
        [
            // 'id' => 179,
            'region_id' => 9,
            'township_mm' => 'ပဗသ',
        ],
        [
            // 'id' => 180,
            'region_id' => 9,
            'township_mm' => 'ပဘန',
        ],
        [
            // 'id' => 181,
            'region_id' => 9,
            'township_mm' => 'ပမန',
        ],
        [
            // 'id' => 182,
            'region_id' => 9,
            'township_mm' => 'ပသက',
        ],
        [
            // 'id' => 183,
            'region_id' => 9,
            'township_mm' => 'ပဥလ',
        ],
        [
            // 'id' => 184,
            'region_id' => 9,
            'township_mm' => 'မကန',
        ],
        [
            // 'id' => 185,
            'region_id' => 9,
            'township_mm' => 'မခန',
        ],
        [
            // 'id' => 186,
            'region_id' => 9,
            'township_mm' => 'မတရ',
        ],
        [
            // 'id' => 187,
            'region_id' => 9,
            'township_mm' => 'မထလ',
        ],
        [
            // 'id' => 188,
            'region_id' => 9,
            'township_mm' => 'မနတ',
        ],
        [
            // 'id' => 189,
            'region_id' => 9,
            'township_mm' => 'မနမ',
        ],
        [
            // 'id' => 190,
            'region_id' => 9,
            'township_mm' => 'မမန',
        ],
        [
            // 'id' => 191,
            'region_id' => 9,
            'township_mm' => 'မရတ',
        ],
        [
            // 'id' => 192,
            'region_id' => 9,
            'township_mm' => 'မရမ',
        ],
        [
            // 'id' => 193,
            'region_id' => 9,
            'township_mm' => 'မလန',
        ],
        [
            // 'id' => 194,
            'region_id' => 9,
            'township_mm' => 'မသန',
        ],
        [
            // 'id' => 195,
            'region_id' => 9,
            'township_mm' => 'မဟမ',
        ],
        [
            // 'id' => 196,
            'region_id' => 9,
            'township_mm' => 'မအဇ',
        ],
        [
            // 'id' => 197,
            'region_id' => 9,
            'township_mm' => 'ရမသ',
        ],
        [
            // 'id' => 198,
            'region_id' => 9,
            'township_mm' => 'လ၀န',
        ],
        [
            // 'id' => 199,
            'region_id' => 9,
            'township_mm' => '၀တန',
        ],
        [
            // 'id' => 200,
            'region_id' => 9,
            'township_mm' => 'သစန',
        ],
        [
            // 'id' => 201,
            'region_id' => 9,
            'township_mm' => 'သပက',
        ],
        [
            // 'id' => 202,
            'region_id' => 9,
            'township_mm' => 'အခန',
        ],
        [
            // 'id' => 202,
            'region_id' => 9,
            'township_mm' => 'အမဇ',
        ],
        [
            // 'id' => 203,
            'region_id' => 9,
            'township_mm' => 'အမရ',
        ],
        [
            // 'id' => 204,
            'region_id' => 9,
            'township_mm' => 'ဥတသ',
        ],
        [
            // 'id' => 205,
            'region_id' => 10,
            'township_mm' => 'ကထန',
        ],
        [
            // 'id' => 206,
            'region_id' => 10,
            'township_mm' => 'ကမရ',
        ],
        [
            // 'id' => 207,
            'region_id' => 10,
            'township_mm' => 'ခဆန',
        ],
        [
            // 'id' => 208,
            'region_id' => 10,
            'township_mm' => 'ပမန',
        ],
        [
            // 'id' => 209,
            'region_id' => 10,
            'township_mm' => 'ဘလန',
        ],
        [
            // 'id' => 210,
            'region_id' => 10,
            'township_mm' => 'မဒန',
        ],
        [
            // 'id' => 211,
            'region_id' => 10,
            'township_mm' => 'မလမ',
        ],
        [
            // 'id' => 212,
            'region_id' => 10,
            'township_mm' => 'ရမန',
        ],
        [
            // 'id' => 213,
            'region_id' => 10,
            'township_mm' => 'လမန',
        ],
        [
            // 'id' => 214,
            'region_id' => 10,
            'township_mm' => 'သထန',
        ],
        [
            // 'id' => 215,
            'region_id' => 10,
            'township_mm' => 'သဖရ',
        ],
        [
            // 'id' => 216,
            'region_id' => 11,
            'township_mm' => 'ကတန',
        ],
        [
            // 'id' => 216,
            'region_id' => 11,
            'township_mm' => 'ကဖန',
        ],
        [
            // 'id' => 216,
            'region_id' => 11,
            'township_mm' => 'ကတလ',
        ],
        [
            // 'id' => 217,
            'region_id' => 11,
            'township_mm' => 'ကဖန',
        ],
        [
            // 'id' => 218,
            'region_id' => 11,
            'township_mm' => 'ဂမန',
        ],
        [
            // 'id' => 219,
            'region_id' => 11,
            'township_mm' => 'စတန',
        ],
        [
            // 'id' => 220,
            'region_id' => 11,
            'township_mm' => 'တကန',
        ],
        [
            // 'id' => 221,
            'region_id' => 11,
            'township_mm' => 'ပဏက',
        ],
        [
            // 'id' => 222,
            'region_id' => 11,
            'township_mm' => 'ပတန',
        ],
        [
            // 'id' => 216,
            'region_id' => 11,
            'township_mm' => 'သပဝ',
        ],
        [
            // 'id' => 223,
            'region_id' => 11,
            'township_mm' => 'သသတ',
        ],
        [
            // 'id' => 223,
            'region_id' => 11,
            'township_mm' => 'ဘသတ',
        ],
        [
            // 'id' => 224,
            'region_id' => 11,
            'township_mm' => 'မတန',
        ],
        [
            // 'id' => 225,
            'region_id' => 11,
            'township_mm' => 'မပတ',
        ],
        [
            // 'id' => 226,
            'region_id' => 11,
            'township_mm' => 'မပန',
        ],
        [
            // 'id' => 227,
            'region_id' => 11,
            'township_mm' => 'မအန',
        ],
        [
            // 'id' => 228,
            'region_id' => 11,
            'township_mm' => 'မဥန',
        ],
        [
            // 'id' => 229,
            'region_id' => 11,
            'township_mm' => 'ရဗန',
        ],
        [
            // 'id' => 230,
            'region_id' => 11,
            'township_mm' => 'ရသတ',
        ],
        [
            // 'id' => 231,
            'region_id' => 11,
            'township_mm' => 'သတန',
        ],
        [
            // 'id' => 232,
            'region_id' => 11,
            'township_mm' => 'အမန',
        ],
        [
            // 'id' => 233,
            'region_id' => 12,
            'township_mm' => 'ကကက',
        ],
        [
            // 'id' => 234,
            'region_id' => 12,
            'township_mm' => 'ကခက',
        ],
        [
            // 'id' => 235,
            'region_id' => 12,
            'township_mm' => 'ကတတ',
        ],
        [
            // 'id' => 236,
            'region_id' => 12,
            'township_mm' => 'ကတန',
        ],
        [
            // 'id' => 237,
            'region_id' => 12,
            'township_mm' => 'ကမတ',
        ],
        [
            // 'id' => 238,
            'region_id' => 12,
            'township_mm' => 'ကမန',
        ],
        [
            // 'id' => 239,
            'region_id' => 12,
            'township_mm' => 'ကမရ',
        ],
        [
            // 'id' => 240,
            'region_id' => 12,
            'township_mm' => 'ခရန',
        ],
        [
            // 'id' => 241,
            'region_id' => 12,
            'township_mm' => 'စခန',
        ],
        [
            // 'id' => 242,
            'region_id' => 12,
            'township_mm' => 'ဆကခ',
        ],
        [
            // 'id' => 243,
            'region_id' => 12,
            'township_mm' => 'ဆကန',
        ],
        [
            // 'id' => 245,
            'region_id' => 12,
            'township_mm' => 'တကန',
        ],
        [
            // 'id' => 246,
            'region_id' => 12,
            'township_mm' => 'တတထ',
        ],
        [
            // 'id' => 247,
            'region_id' => 12,
            'township_mm' => 'တတန',
        ],
        [
            // 'id' => 248,
            'region_id' => 12,
            'township_mm' => 'တမန',
        ],
        [
            // 'id' => 249,
            'region_id' => 12,
            'township_mm' => 'ထတပ',
        ],
        [
            // 'id' => 250,
            'region_id' => 12,
            'township_mm' => 'ဒဂဆ',
        ],
        [
            // 'id' => 251,
            'region_id' => 12,
            'township_mm' => 'ဒဂတ',
        ],
        [
            // 'id' => 252,
            'region_id' => 12,
            'township_mm' => 'ဒဂန',
        ],
        [
            // 'id' => 253,
            'region_id' => 12,
            'township_mm' => 'ဒဂမ',
        ],
        [
            // 'id' => 254,
            'region_id' => 12,
            'township_mm' => 'ဒဂရ',
        ],
        [
            // 'id' => 255,
            'region_id' => 12,
            'township_mm' => 'ဒပန',
        ],
        [
            // 'id' => 256,
            'region_id' => 12,
            'township_mm' => 'ဒလန',
        ],
        [
            // 'id' => 257,
            'region_id' => 12,
            'township_mm' => 'ပဇတ',
        ],
        [
            // 'id' => 258,
            'region_id' => 12,
            'township_mm' => 'ပဘတ',
        ],
        [
            // 'id' => 259,
            'region_id' => 12,
            'township_mm' => 'ဗတထ',
        ],
        [
            // 'id' => 260,
            'region_id' => 12,
            'township_mm' => 'ဗဟန',
        ],
        [
            // 'id' => 261,
            'region_id' => 12,
            'township_mm' => 'မဂတ',
        ],
        [
            // 'id' => 262,
            'region_id' => 12,
            'township_mm' => 'မဂဒ',
        ],
        [
            // 'id' => 263,
            'region_id' => 12,
            'township_mm' => 'မဘန',
        ],
        [
            // 'id' => 264,
            'region_id' => 12,
            'township_mm' => 'မရက',
        ],
        [
            // 'id' => 264,
            'region_id' => 12,
            'township_mm' => 'မဥက',
        ],
        [
            // 'id' => 265,
            'region_id' => 12,
            'township_mm' => 'ရကန',
        ],
        [
            // 'id' => 266,
            'region_id' => 12,
            'township_mm' => 'ရပသ',
        ],
        [
            // 'id' => 267,
            'region_id' => 12,
            'township_mm' => 'လကန',
        ],
        [
            // 'id' => 268,
            'region_id' => 12,
            'township_mm' => 'လမတ',
        ],
        [
            // 'id' => 268,
            'region_id' => 12,
            'township_mm' => 'လမန',
        ],
        [
            // 'id' => 269,
            'region_id' => 12,
            'township_mm' => 'လသန',
        ],
        [
            // 'id' => 270,
            'region_id' => 12,
            'township_mm' => 'လသယ',
        ],
        [
            // 'id' => 271,
            'region_id' => 12,
            'township_mm' => 'သကတ',
        ],
        [
            // 'id' => 272,
            'region_id' => 12,
            'township_mm' => 'သခန',
        ],
        [
            // 'id' => 273,
            'region_id' => 12,
            'township_mm' => 'သဃက',
        ],
        [
            // 'id' => 274,
            'region_id' => 12,
            'township_mm' => 'သလန',
        ],
        [
            // 'id' => 275,
            'region_id' => 12,
            'township_mm' => 'အစန',
        ],
        [
            // 'id' => 276,
            'region_id' => 12,
            'township_mm' => 'အလန',
        ],
        [
            // 'id' => 277,
            'region_id' => 12,
            'township_mm' => 'ဥကတ',
        ],
        [
            // 'id' => 244,
            'region_id' => 12,
            'township_mm' => 'ဥကမ',
        ],
        [
            // 'id' => 278,
            'region_id' => 13,
            'township_mm' => 'ကကန',
        ],
        [
            // 'id' => 279,
            'region_id' => 13,
            'township_mm' => 'ကခန',
        ],
        [
            // 'id' => 280,
            'region_id' => 13,
            'township_mm' => 'ကတန',
        ],
        [
            // 'id' => 281,
            'region_id' => 13,
            'township_mm' => 'ကမန',
        ],
        [
            // 'id' => 282,
            'region_id' => 13,
            'township_mm' => 'ကလတ',
        ],
        [
            // 'id' => 283,
            'region_id' => 13,
            'township_mm' => 'ကလန',
        ],
        [
            // 'id' => 284,
            'region_id' => 13,
            'township_mm' => 'ကသန',
        ],
        [
            // 'id' => 285,
            'region_id' => 13,
            'township_mm' => 'ကဟန',
        ],
        [
            // 'id' => 286,
            'region_id' => 13,
            'township_mm' => 'ခလန',
        ],
        [
            // 'id' => 287,
            'region_id' => 13,
            'township_mm' => 'ဆဆန',
        ],
        [
            // 'id' => 288,
            'region_id' => 13,
            'township_mm' => 'ညရန',
        ],
        [
            // 'id' => 289,
            'region_id' => 13,
            'township_mm' => 'တကန',
        ],
        [
            // 'id' => 290,
            'region_id' => 13,
            'township_mm' => 'တခန',
        ],
        [
            // 'id' => 291,
            'region_id' => 13,
            'township_mm' => 'တခလ',
        ],
        [
            // 'id' => 292,
            'region_id' => 13,
            'township_mm' => 'တတန',
        ],
        [
            // 'id' => 293,
            'region_id' => 13,
            'township_mm' => 'တယန',
        ],
        [
            // 'id' => 294,
            'region_id' => 13,
            'township_mm' => 'တလန',
        ],
        [
            // 'id' => 295,
            'region_id' => 13,
            'township_mm' => 'နခတ',
        ],
        [
            // 'id' => 296,
            'region_id' => 13,
            'township_mm' => 'နခန',
        ],
        [
            // 'id' => 297,
            'region_id' => 13,
            'township_mm' => 'နစန',
        ],
        [
            // 'id' => 298,
            'region_id' => 13,
            'township_mm' => 'နဆန',
        ],
        [
            // 'id' => 299,
            'region_id' => 13,
            'township_mm' => 'နတန',
        ],
        [
            // 'id' => 300,
            'region_id' => 13,
            'township_mm' => 'နတရ',
        ],
        [
            // 'id' => 301,
            'region_id' => 13,
            'township_mm' => 'နဖန',
        ],
        [
            // 'id' => 302,
            'region_id' => 13,
            'township_mm' => 'နမတ',
        ],
        [
            // 'id' => 303,
            'region_id' => 13,
            'township_mm' => 'ပဆန',
        ],
        [
            // 'id' => 304,
            'region_id' => 13,
            'township_mm' => 'ပတယ',
        ],
        [
            // 'id' => 305,
            'region_id' => 13,
            'township_mm' => 'ပယန',
        ],
        [
            // 'id' => 306,
            'region_id' => 13,
            'township_mm' => 'ပလတ',
        ],
        [
            // 'id' => 307,
            'region_id' => 13,
            'township_mm' => 'ပလန',
        ],
        [
            // 'id' => 308,
            'region_id' => 13,
            'township_mm' => 'ပ၀န',
        ],
        [
            // 'id' => 309,
            'region_id' => 13,
            'township_mm' => 'ဖခန',
        ],
        [
            // 'id' => 310,
            'region_id' => 13,
            'township_mm' => 'မကတ',
        ],
        [
            // 'id' => 311,
            'region_id' => 13,
            'township_mm' => 'မကန',
        ],
        [
            // 'id' => 312,
            'region_id' => 13,
            'township_mm' => 'မခန',
        ],
        [
            // 'id' => 313,
            'region_id' => 13,
            'township_mm' => 'မငန',
        ],
        [
            // 'id' => 314,
            'region_id' => 13,
            'township_mm' => 'မဆန',
        ],
        [
            // 'id' => 315,
            'region_id' => 13,
            'township_mm' => 'မတန',
        ],
        [
            // 'id' => 316,
            'region_id' => 13,
            'township_mm' => 'မနန',
        ],
        [
            // 'id' => 317,
            'region_id' => 13,
            'township_mm' => 'မပတ',
        ],
        [
            // 'id' => 318,
            'region_id' => 13,
            'township_mm' => 'မပန',
        ],
        [
            // 'id' => 319,
            'region_id' => 13,
            'township_mm' => 'မဖတ',
        ],
        [
            // 'id' => 320,
            'region_id' => 13,
            'township_mm' => 'မစန',
        ],
        [
            // 'id' => 321,
            'region_id' => 13,
            'township_mm' => 'မဘန',
        ],
        [
            // 'id' => 322,
            'region_id' => 13,
            'township_mm' => 'မမတ',
        ],
        [
            // 'id' => 323,
            'region_id' => 13,
            'township_mm' => 'မမန',
        ],
        [
            // 'id' => 324,
            'region_id' => 13,
            'township_mm' => 'မယတ',
        ],
        [
            // 'id' => 325,
            'region_id' => 13,
            'township_mm' => 'မရတ',
        ],
        [
            // 'id' => 326,
            'region_id' => 13,
            'township_mm' => 'မလန',
        ],
        [
            // 'id' => 327,
            'region_id' => 13,
            'township_mm' => 'ရငန',
        ],
        [
            // 'id' => 328,
            'region_id' => 13,
            'township_mm' => 'ရစန',
        ],
        [
            // 'id' => 329,
            'region_id' => 13,
            'township_mm' => 'လကန',
        ],
        [
            // 'id' => 330,
            'region_id' => 13,
            'township_mm' => 'လခတ',
        ],
        [
            // 'id' => 331,
            'region_id' => 13,
            'township_mm' => 'လခန',
        ],
        [
            // 'id' => 332,
            'region_id' => 13,
            'township_mm' => 'လရန',
        ],
        [
            // 'id' => 333,
            'region_id' => 13,
            'township_mm' => 'လလန',
        ],
        [
            // 'id' => 334,
            'region_id' => 13,
            'township_mm' => 'သနန',
        ],
        [
            // 'id' => 335,
            'region_id' => 13,
            'township_mm' => 'သပန',
        ],
        [
            // 'id' => 336,
            'region_id' => 13,
            'township_mm' => 'ဟတန',
        ],
        [
            // 'id' => 337,
            'region_id' => 13,
            'township_mm' => 'ဟပတ',
        ],
        [
            // 'id' => 338,
            'region_id' => 13,
            'township_mm' => 'ဟပန',
        ],
        [
            // 'id' => 339,
            'region_id' => 13,
            'township_mm' => 'အခန',
        ],
        [
            // 'id'		=>	340,
            'region_id' => 14,
            'township_mm' => 'ကကထ',
        ],
        [
            // 'id'		=>	341,
            'region_id' => 14,
            'township_mm' => 'ကကန',
        ],
        [
            // 'id'		=>	342,
            'region_id' => 14,
            'township_mm' => 'ကပန',
        ],
        [
            // 'id'		=>	343,
            'region_id' => 14,
            'township_mm' => 'ကလန',
        ],
        [
            // 'id'		=>	344,
            'region_id' => 14,
            'township_mm' => 'ငဆန',
        ],
        [
            // 'id'		=>	345,
            'region_id' => 14,
            'township_mm' => 'ငပတ',
        ],
        [
            // 'id'		=>	346,
            'region_id' => 14,
            'township_mm' => 'ငရက',
        ],
        [
            // 'id'		=>	347,
            'region_id' => 14,
            'township_mm' => 'ငသခ',
        ],
        [
            // 'id'		=>	348,
            'region_id' => 14,
            'township_mm' => 'ဇလန',
        ],
        [
            // 'id'		=>	349,
            'region_id' => 14,
            'township_mm' => 'ညတန',
        ],
        [
            // 'id'		=>	350,
            'region_id' => 14,
            'township_mm' => 'ဒဒရ',
        ],
        [
            // 'id'		=>	351,
            'region_id' => 14,
            'township_mm' => 'ဓနဖ',
        ],
        [
            // 'id'		=>	352,
            'region_id' => 14,
            'township_mm' => 'ပစလ',
        ],
        [
            // 'id'		=>	353,
            'region_id' => 14,
            'township_mm' => 'ပတန',
        ],
        [
            // 'id'		=>	354,
            'region_id' => 14,
            'township_mm' => 'ပသန',
        ],
        [
            // 'id'		=>	355,
            'region_id' => 14,
            'township_mm' => 'ပသရ',
        ],
        [
            // 'id'		=>	356,
            'region_id' => 14,
            'township_mm' => 'ဖပန',
        ],
        [
            // 'id'		=>	357,
            'region_id' => 14,
            'township_mm' => 'ဘကလ',
        ],
        [
            // 'id'		=>	358,
            'region_id' => 14,
            'township_mm' => 'မမက',
        ],
        [
            // 'id'		=>	359,
            'region_id' => 14,
            'township_mm' => 'မမန',
        ],
        [
            // 'id'		=>	360,
            'region_id' => 14,
            'township_mm' => 'မအန',
        ],
        [
            // 'id'		=>	361,
            'region_id' => 14,
            'township_mm' => 'မအပ',
        ],
        [
            // 'id'		=>	362,
            'region_id' => 14,
            'township_mm' => 'ရကန',
        ],
        [
            // 'id'		=>	363,
            'region_id' => 14,
            'township_mm' => 'လပတ',
        ],
        [
            // 'id'		=>	364,
            'region_id' => 14,
            'township_mm' => 'လမန',
        ],
        [
            // 'id'		=>	365,
            'region_id' => 14,
            'township_mm' => '၀ခမ',
        ],
        [
            // 'id'		=>	366,
            'region_id' => 14,
            'township_mm' => 'သနပ',
        ],
        [
            // 'id'		=>	367,
            'region_id' => 14,
            'township_mm' => 'ဟကက',
        ],
        [
            // 'id'		=>	368,
            'region_id' => 14,
            'township_mm' => 'ဟသတ',
        ],
        [
            // 'id'		=>	369,
            'region_id' => 14,
            'township_mm' => 'အဂပ',
        ],
        [
            // 'id'		=>	370,
            'region_id' => 14,
            'township_mm' => 'အမတ',
        ],
        [
            // 'id'		=>	371,
            'region_id' => 14,
            'township_mm' => 'အမန',
        ],
    ],
];
