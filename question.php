<?php 

    /**
     * [
     *      問題文
     *      選択肢１
     *      選択肢２
     *      選択肢３
     *      画像(なければ””)
     *      答え
     *      解説
     * ]
     */
    $questions = [
        [
            "ホルモンとその作用の組み合わせで誤っているのはどれか。",
            "パラソルモン　ー　血中カルシウム濃度上昇",
            "バソプレシン　ー　尿量増加",
            "インスリン　ー　血糖低下",
            "",
            "2",
            "バソプレシン(抗利尿ホルモン)は下垂体後葉から分泌されるホルモンです。<br>腎臓で水の再吸収を増加させて尿量を低下させます。"
        ],
        [
            "全肺気量から機能的残機量を差し引いた肺気量分画の名称はどれか。",
            "予備吸気量",
            "最大吸気量",
            "1回換気量",
            "",
            "2",
            "全肺気量＝吸気予備量＋一回換気量＋呼気予備量＋残気量です。<br>このうち、吸気予備量＋一回換気量を最大吸気量、呼気吸気量＋残気量を機能的残気量と言います。<br>肺気量分画の図は描けるようになっておきましょう。"
        ],
        [
            "体液について正しいのはどれか。",
            "成人男性の水分量は体重の約60%である。",
            "体重あたりの水分量は成人の方が乳幼児よりも多い。",
            "Naイオン濃度は細胞内の方が細胞外より多い。",
            "",
            "1",
            "成人男性で体重の60％、新生児で約80％が「体液」とよばれる水分でできています。"
        ],
        [
            "エネルギー代謝について正しいのはどれか。",
            "基礎代謝量は睡眠中に測定する",
            "基礎代謝量は体脂肪に比例する",
            "基礎代謝量は体表面積に比例する",
            "",
            "3",
            "基礎代謝量は，覚醒・安静・仰臥位で測定する。<br>体重あたりの基礎代謝量は，除体脂肪体重に比例する。"
        ],
        [
            "単位について誤っているのはどれか。",
            "圧力 - Pa",
            "線量当量 - Bq",
            "粘性率 - Pa・s",
            "",
            "2",
            "線量当量の単位はシーベルト（記号:[Sv]）です。<br>Bqは放射能を表す単位です。"
        ],
        [
            "音源が観測者に向かってきた。音源の速度がv[m/s]、振動数がf[Hz]の時、静止している観測者に聞こえる音の振動数[Hz]はどれか。音速はc[m/s]とする。",
            "fc/(c-v)",
            "f(c+v)/c",
            "f(c+v)/(c-v)",
            "",
            "1",
            "公式はイメージで覚えましょう。<br>音源と観測者が近づくと聞こえる音の振動数は高くなります。<br>式中の「分母は音源の速度」、「分子は観測者の速度」と記憶し、それぞれ音速から足したり引いたりして振動数が高くなるように計算しましょう。<br>今回の場合、音源のみ動いているため、分母において音速から音源の速度を引けば振動数は大きくなります。"
        ],
        [
            "図の回路の端子A-B間の合成抵抗は何Ωか。",
            "25",
            "50",
            "55",
            "./images/image41_7.png",
            "1",
            "ブリッジ回路において、対角線の抵抗同士を掛けた値が同じ状態のことを「平衡状態」という(問題の場合、20Ω×30Ω=20Ω×30Ω)。<br>この場合、真ん中の30Ωには電流は流れないため、抵抗はないものとして計算できる。<br>(20+30)(20+30)/{(20+30)+(20+30)}=25"
        ],
        [
            "図の回路で10kΩの抵抗に流れる電流が0.2mAの時、抵抗Rの大きさは何kΩか。但し、オペアンプは理想オペアンプとする。",
            "1.0",
            "2.0",
            "3.0",
            "./images/image41_8.png",
            "1",
            "オペアンプの+-２つの入力電圧は同じ(電圧差0)と覚えてしまいましょう。これを「イマジナリショート」言います。<br>つまり、Rにかかる電圧は0.2Vです。<br>また、入力抵抗は無限大で出力抵抗は0(これも暗記してください)なので、-の入力側に電流は流れず10kΩに流れた電流は全て抵抗Rに流れます。<br>以上を踏まえると、オームの法則より0.2V/0.2mA=1.0kΩ"
        ],
        [
            "NAND回路において、入力がA、B、出力がYとする時、下の真理値表で正しいのはどれか。",
            "",
            "",
            "",
            "./images/image41_9.png",
            "3",
            "NANDはAND(論理積)の否定形です。ANDは２つの入力が1の時のみ出力が1になります。"
        ],
        [
            "マルウェアでないのはどれか。",
            "ワーム",
            "スパイウェア",
            "スパムメール",
            "",
            "3",
            "マルウェアとはウイルスなど悪意あるソフトウェアの総称です。<br>スパムメールは宣伝目的で一方的に送られる電子メールのことです。"
        ],
        [
            "標準12誘導心電図計測について誤っているものはどれか。",
            "第Ⅱ誘導は右手電極と左手電極との間の電位差である。",
            "第Ⅲ誘導は第Ⅰ誘導と第Ⅱ誘導から計算で得ることができる。",
            "胸部誘導は単極誘導である。",
            "",
            "1",
            "右手電極と左手電極との間の電位差は第Ⅰ誘導です。"
        ],
        [
            "観血式血圧測定法について誤っているものはどれか。",
            "トランスデューサのゼロ点調整は右心房の高さで行う。",
            "延長チューブはなるべく柔らかいものを使用する。",
            "共振現象の軽減にダンピングデバイスが有効である。",
            "",
            "2",
            "延長チューブは「硬くて短いもの」がよく、柔らかいと微弱な圧は検出できない。"
        ],
        [
            "パルスオキシメータが利用している光学特性はどれか。",
            "組織界面での反射",
            "血漿での散乱",
            "血球での吸収",
            "",
            "3",
            "パルスオキシメータは血液の酸素飽和度を測定する装置です。<br>赤色光と赤外光を用いて血球の吸収度を測定して算出しています。"
        ],
        [
            "センサと変換対象の組合せで誤っているのはどれか。",
            "CdS - 光",
            "ストレインゲージ - 変位",
            "ピエゾ素子 - 電場",
            "",
            "3",
            "ピエゾ素子は圧電体に加えられた力を電圧に変換する、あるいは電圧を力に変換する、圧電効果を利用した受動素子です。超音波装置に用いられています。"
        ],
        [
            "X線CTについて正しいのはどれか。",
            "肺がんの検出に用いられる。",
            "造影剤が必須である。",
            "低いCT値の組織は白く表現される。",
            "",
            "1",
            "造影剤が使われることもありますが、必須ではありません。<br>低いCT値では黒く表現されます。"
        ],
        [
            "MRIについて正しいのはどれか。",
            "超音波で原子核を共鳴させる。",
            "軌道電子のエネルギーを測定する。",
            "電磁ノイズの影響を受けやすい。",
            "",
            "3",
            "MRIは高磁場で原子核を共鳴させます。<br>原子核のエネルギーを測定しています。"
        ],
        [
            "除細動器の取り扱いで誤っているものはどれか。",
            "通電を行う際に、周囲のスタッフに注意を促す。",
            "体表からの心室細動除去の通電エネルギーは150Jに設定する。",
            "心房細動の除細動はR波同期スイッチをOFFにする。",
            "",
            "3",
            "心房細動では心室は正常に動作しているため、R波同期スイッチをONにします。"
        ],
        [
            "電気メスについて正しいのはどれか。",
            "標準負荷抵抗：5kΩ",
            "凝固時電力：200W",
            "切開出力波形：バースト波",
            "",
            "2",
            "標準負荷抵抗：500Ω、切開出力波形は連続正弦波です。バースト波は凝固時です。"
        ],
        [
            "心臓ペースメーカーについて誤っているものはどれか。",
            "DDDモードの電極リードは２本である。",
            "双極リードは中枢側がマイナスである。",
            "植え込みは大胸筋と皮下組織の間に植え込まれる。",
            "",
            "2",
            "双極リードは中枢側がプラスです。"
        ],
        [
            "IABPについて正しいのはどれか。",
            "抗凝固剤を必要としない。",
            "血液ポンプは必須である。",
            "ヘリウムガスが使われているのは応答性に優れるためである。",
            "",
            "3",
            "IABPは胸部下行大動脈にバルーンを留置させ、膨らませたりしぼませたりして、心臓を助ける補助循環装置です。"
        ],
        [
            "PCPSの操作で正しいのはどれか。",
            "流量は遠心ポンプの回転数で調節する。",
            "PaCO2が高い場合には酸素混合ガスの流量を下げる。",
            "送血流量を増やすために血液ポンプの位置を下げた。",
            "",
            "1",
            "PaCO2が高い場合には酸素混合ガスの流量を上げます。<br>血液ポンプの位置を下げると送血流量は減ります。"
        ],
        [
            "CO2レーザー手術装置について正しいのはどれか。",
            "石英ファイバで導光する。",
            "レーザーの出射方向は打ち上げとする。",
            "照射部位周辺の術野を湿ったガーゼで覆った。",
            "",
            "3",
            "CO2レーザーは多関節マニピュレータで導光する。<br>レーザーの打ち上げは危ないので打ち下げです。"
        ],
        [
            "内視鏡について誤っているのはどれか。",
            "ファイバスコープの先端にはCCD撮像素子がある。",
            "電子スコープにはカラーフィルタが用いられている。",
            "カプセル内視鏡には光源が内蔵されている。",
            "",
            "1",
            "CCD撮像素子が付いているのは電子内視鏡です。ファイバースコープは接眼レンズで覗きます。"
        ],
        [
            "人工呼吸器の換気モードについて正しいのはどれか。",
            "CPAP：自発呼吸がある患者に用いる。",
            "EIP：吸気の終了後すぐに呼気に移行する。",
            "IRV：呼気時間を吸気時間よりも長くする。",
            "",
            "1",
            "EIPは吸気の終了後、一定時間休止してから呼気に移行する。<br>IRVは吸気時間を呼気時間よりも長くする。"
        ],
        [
            "人工心肺用ローラポンプについて正しいのはどれか。",
            "回転数と流量は比例する。",
            "血球の破壊は少ない。",
            "後負荷の変動で流量が変化する。",
            "",
            "1",
            "ローラポンプはチューブを押しつぶすため、その時の血球の破壊が多い。<br>後負荷の変動で流量が変化するのは遠心ポンプです。"
        ],
        [
            "血液透析について誤っているものはどれか。",
            "中空糸型の透析膜が使用されている。",
            "除水は浸透圧差で除去する。",
            "ローラポンプが使われている。",
            "",
            "2",
            "血液透析において除水は限外濾過を用いて除去します。腹膜透析の場合は浸透圧差で除去します。"
        ],
        [
            "二酸化炭素の医療ガス配管端末器の識別色はどれか。",
            "黒",
            "緑",
            "橙",
            "",
            "3",
            "二酸化炭素の医療ガス配管端末器の識別色は橙色です。ボンベは緑色です。"
        ],
        [
            "医用接地について誤っているのはどれか。",
            "等電位接地によって各々のME機器接地端子の電位は等しくなる。",
            "ミクロショック対策として等電位接地が施される。",
            "接地分岐線の抵抗値は上限10Ωである。",
            "",
            "3",
            "接地分岐線の抵抗値は0.1Ω以下である。（接地極が10Ω以下。)"
        ],
        [
            "誤った操作ができないようにする安全対策はどれか。",
            "フールプルーフ",
            "フェイルセーフ",
            "冗長化",
            "",
            "1",
            "フェイルセーフは誤操作が生じてもその危険性を最小にし、安全を確保する構造のこと。<br>冗長化はシステムに何らかの障害が発生したケースに備えて、予備装置を普段から配置・運用しておくことです。"
        ],
        [
            "誤っているものはどれか。",
            "滅菌とは微生物を全て死滅させることである。",
            "消毒とは病原性を有する微生物感染力を失わせることである。",
            "HIVにはポビドンヨードは無効である。",
            "",
            "3",
            "HIVにはポビドンヨードは有効です。"
        ]
    ];
?>