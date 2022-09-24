<?php
include("../path.php");
include("inc/db_config.php");
include("inc/essentials.php");
session_regenerate_id(true);
adminLogin();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Setting Page</title>
    <?php include("inc/links.php") ?>
    <style>
        .login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
        }

        #dashboard-menu {
            position: fixed;
            height: 100%;
        }

        .break-word {
            word-break: break-all;
        }

        @media screen and (max-width: 992px) {
            #dashboard-menu {
                width: 100%;
                height: auto;
            }
            #main-content{
                margin-top: 60px;
            }
        }
    </style>
</head>

<body class="bg-light">
    <?php require("inc/header.php") ?>
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden break-word">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Non dolor odit, quia facilis optio quidem nihil, repudiandae officiis nemo obcaecati error? Itaque perspiciatis vero obcaecati accusantium suscipit, laudantium ipsa in cumque illum nemo unde optio minima! Ratione culpa commodi minus, quae voluptatibus itaque consectetur odit ullam labore laboriosam ipsa velit repudiandae totam. Corrupti sit repudiandae velit dolor numquam, cum quis nostrum odio, voluptatibus, assumenda saepe quaerat commodi omnis amet molestias harum iure reprehenderit cupiditate? Sapiente consectetur velit a, debitis laudantium est beatae vel nemo autem ullam illum voluptatum aliquam in ipsam mollitia dolorum asperiores explicabo delectus? Distinctio officiis nihil ipsum facere quibusdam non qui expedita culpa dolor harum! Eligendi reprehenderit tempora earum magnam iure consequuntur aliquid iste necessitatibus nesciunt nemo! Temporibus mollitia porro, ex culpa a reiciendis harum necessitatibus, dolore obcaecati repellat eos ducimus exercitationem magni, perspiciatis laborum! Similique omnis natus earum eum a hic tempora vitae dolorum enim, commodi temporibus! Similique dolor veritatis accusamus aliquam, minima provident recusandae praesentium minus facere quas eveniet doloremque expedita id nesciunt nulla quidem vero, animi voluptatum, quisquam odio quod sed blanditiis doloribus explicabo. Aut sit earum eligendi saepe soluta est perspiciatis cum rerum similique repellat possimus iusto, beatae hic vel tempore omnis. Assumenda, inventore aliquam, consequuntur provident consequatur eaque eveniet asperiores mollitia reprehenderit nihil amet illo dolores veritatis voluptatum atque fugiat ex ea ut beatae modi vel ab ipsa et a? Quod qui alias cumque optio non corporis ea exercitationem hic repellat ducimus consequatur, debitis quos veniam laboriosam ipsa quis tempora incidunt neque? Nobis cumque facilis labore, tempora aliquid unde iste commodi distinctio ea sed? Ullam corporis culpa, non molestias sed, repellendus minus sint molestiae quidem aspernatur voluptatibus nulla odio perferendis! Sed, sapiente repellat reiciendis error harum aut, facilis alias eum, illo quae tenetur facere aliquid! Quasi modi exercitationem beatae facere hic, repellendus quia vel veritatis ea iste impedit voluptatum, expedita aliquam et rem minima. Modi sit, consequatur soluta facilis quae perferendis maxime quidem optio reiciendis ipsum nesciunt totam odio accusantium velit veritatis! Dignissimos, quo dolor. Nemo neque aspernatur recusandae eum quam similique deserunt voluptatibus, illo magnam a culpa doloribus consequuntur voluptatum commodi est repellendus voluptate ab saepe perspiciatis, provident libero praesentium odio debitis quis. Enim vitae est voluptatibus accusantium nostrum, optio maiores veniam, corrupti odit cum culpa, harum libero dolore ipsa? Asperiores nihil neque perferendis error aliquam fugiat commodi enim eaque rerum laborum officia expedita libero praesentium at porro, labore impedit, quisquam illo dolores. Ex sequi, ratione dignissimos in ea voluptatum sunt similique aliquid animi beatae est eligendi quam minima dolores incidunt architecto deleniti soluta pariatur accusantium, sed dolorum? Incidunt cupiditate distinctio saepe repudiandae tempore. Aspernatur quos repudiandae totam voluptas praesentium voluptatem delectus rerum, cumque quod. Corrupti, praesentium! Aliquid eos facere quia animi, sed beatae veniam aliquam vero nostrum, sint commodi corrupti consequatur tempore ratione tenetur voluptates? Est veniam voluptatibus doloremque earum sapiente aliquam sunt magni labore voluptatem, laborum explicabo quisquam sed natus laboriosam, nostrum quae itaque velit ullam cupiditate magnam. Vel eius laudantium sed odit cumque laborum necessitatibus animi, nihil ex quos praesentium nemo. Quam cupiditate dolor quia vitae ducimus inventore consectetur excepturi, aperiam dignissimos laudantium, mollitia quidem facere eveniet hic maxime. Accusantium distinctio provident aliquam autem nihil quo vitae maiores earum quaerat, magni nobis quam? Sit veritatis est sequi assumenda veniam dolorum, asperiores numquam quaerat unde eius totam et porro velit quia quos modi, voluptatibus sint, tempora facere officiis suscipit eum blanditiis saepe cupiditate? Amet eum voluptatibus neque impedit quia recusandae harum nesciunt, voluptate sit sint. Deserunt facilis nisi vitae, sint, dolores officia corporis soluta iste hic nesciunt iure ut asperiores corrupti eum in eligendi illo quidem quae, modi quia ipsa pariatur. Nostrum cupiditate sunt assumenda iste alias fugit totam corporis facere officiis voluptates sit, eius repellat animi sapiente odit asperiores, veniam ducimus. Dolor similique quisquam esse, sed aspernatur accusantium ratione perferendis eligendi tempore ipsam possimus, nesciunt totam temporibus repudiandae adipisci blanditiis, accusamus repellendus porro quod illo explicabo laudantium ad? Eum vel aspernatur nihil laborum recusandae error animi quod, hic ut neque? Perspiciatis non, sapiente placeat eos aperiam maxime animi fuga numquam? Harum in deserunt quas exercitationem perferendis ex doloremque commodi nam molestias inventore animi modi officiis eligendi quaerat obcaecati distinctio quisquam totam, iure natus nesciunt! Perspiciatis maxime id delectus molestias eum unde repudiandae necessitatibus dolores aspernatur quibusdam suscipit itaque pariatur, illo harum aliquid ipsa minima eaque. Cum soluta, doloremque autem cumque libero non dolore. Non consectetur vel corrupti earum ea voluptatibus quaerat quo itaque amet fuga. Cupiditate ad voluptates at libero quidem facere consequatur, blanditiis accusantium repellat exercitationem delectus porro impedit excepturi aliquid natus aspernatur fugit veritatis! Quos eaque quas fuga sequi. Nobis dolor quod quidem quas animi nisi tempore quos, sed culpa repellendus voluptatum hic corrupti libero error illum odio est at dolores adipisci voluptas obcaecati asperiores! Sunt officiis illum, veniam est a facilis quas tempora! Reiciendis voluptatum rem pariatur delectus obcaecati illum temporibus. Repellat deserunt ut, error voluptate distinctio sequi mollitia voluptates esse iure consequuntur amet. Laborum quae aspernatur natus optio error ipsum dignissimos iste ex incidunt! Minima corrupti aliquam quasi amet doloribus minus laudantium aut, nemo ab eaque dolores rem beatae itaque, tempora, obcaecati magnam! Ratione, odio, saepe nostrum dolor facere quaerat unde explicabo vero placeat esse recusandae minus nihil, sint laboriosam quisquam magni quasi. Officiis repellendus quibusdam, voluptatibus doloremque incidunt soluta vel nesciunt doloribus at aliquid voluptas possimus, mollitia placeat eius. A ullam, ipsum sint nam animi repudiandae. Nulla maxime rem laudantium dolore perspiciatis voluptas ipsam earum mollitia! Exercitationem natus optio ipsum voluptatibus? Illo ipsa, cumque asperiores dolor vero molestiae dicta eveniet in quis necessitatibus! Excepturi obcaecati provident repudiandae voluptatem voluptates quasi repellat, ipsum itaque maiores saepe sunt temporibus rerum illum quibusdam nihil ea veniam animi quaerat expedita at aspernatur corrupti hic harum reprehenderit. Blanditiis, sit, perferendis exercitationem, ipsa culpa totam neque quisquam id eum quas minus dolorum hic? Libero accusamus voluptatibus deserunt deleniti provident dolore fuga rem illum quo reprehenderit quidem assumenda blanditiis commodi ducimus eveniet repellendus laudantium impedit odio officia fugit, perferendis reiciendis suscipit dicta quae? Officiis, quos! Ipsam cumque laboriosam ipsa quod vitae, veniam facilis alias consectetur, enim fuga nesciunt nostrum a voluptate optio minus labore deserunt eius, debitis quisquam! Necessitatibus ipsum praesentium hic corporis suscipit. Quo quaerat ipsum, nisi nulla ducimus earum aliquid sunt, maxime dignissimos, veritatis natus? Cumque ex quia voluptatem adipisci quasi odio eum? Nihil temporibus minus aspernatur assumenda veritatis minima sint aliquam nesciunt magni debitis aperiam quaerat reiciendis tempore nisi voluptatem expedita dolor in soluta, veniam quia vel, incidunt suscipit a! Architecto voluptatibus est neque ipsam maiores odio nulla debitis non dolores? Libero, molestiae nihil? Aliquid esse alias aliquam explicabo quibusdam odit quasi iure rem omnis minus sit voluptate debitis, mollitia expedita eaque ad sequi! Ad dignissimos mollitia eum veritatis rem vero consequuntur ipsam tempore laudantium provident libero ea reprehenderit quos, iure maiores dolor iste nihil quisquam velit autem nesciunt. Nisi sunt accusamus et iusto ad repellendus asperiores voluptate quibusdam explicabo! Soluta veritatis sit ab placeat beatae quam dolore, aliquid dignissimos aut et ipsa ipsam magnam minus molestiae commodi perspiciatis, hic maxime pariatur non laboriosam. Pariatur architecto cumque similique officiis! Necessitatibus pariatur dolore et modi doloremque a facilis repellat eum commodi repudiandae blanditiis doloribus eligendi beatae id ad quae sint libero inventore provident voluptate nobis, consequuntur dolor. Nesciunt fugit nihil, aut ipsam iusto perspiciatis consequuntur architecto tempore, sequi cupiditate veniam laborum nulla! Obcaecati, accusamus magnam. Quisquam libero adipisci error dolorem sed rem nesciunt quaerat cum corporis facilis, unde explicabo quo reprehenderit iusto, molestias eius modi corrupti illo perspiciatis magnam repellat aperiam fugit aut maxime! Accusamus aliquid suscipit maxime aperiam ea! Porro rem voluptatem repellendus tenetur ducimus aut soluta asperiores dolorum earum! Ut maxime architecto cupiditate mollitia porro? Culpa magnam quasi doloremque laudantium itaque porro sed eaque ipsam consequuntur? Rerum dolor rem illum eaque, vel, quaerat minima iure magni voluptate eius veniam, dolores quasi obcaecati placeat quae accusantium odio nihil earum maxime. Non dicta unde itaque aspernatur error facere cupiditate magnam, ipsum laborum veniam porro fugiat obcaecati tenetur repellendus doloribus voluptates maxime consectetur sed minus doloremque corrupti sapiente quisquam impedit autem. Doloribus culpa vel adipisci impedit, error dolorem eos? Autem fugiat obcaecati, maiores placeat totam temporibus inventore dolore quos quas facilis dicta id at blanditiis enim sunt omnis ea dolores. Vitae ad id facere nisi qui. Recusandae dicta sunt quasi accusantium unde natus inventore amet esse eaque quis quas fugiat alias dignissimos, veniam veritatis pariatur dolor minima perspiciatis aliquam quidem earum. Laudantium at alias eveniet necessitatibus non molestiae incidunt ab voluptate reprehenderit distinctio magni quam architecto odio, consequuntur repellendus nisi voluptatem nam maiores consequatur dolor rem nostrum similique debitis pariatur. Aliquam voluptas eius nesciunt praesentium amet. Nulla, alias. Laboriosam magni corrupti ut amet libero aspernatur tempore, dolor odio possimus inventore vitae quaerat reiciendis doloremque perspiciatis reprehenderit impedit eius earum qui excepturi enim, quos assumenda officiis! Modi neque error ea eligendi dolore est quisquam molestiae quas reprehenderit ex id totam excepturi repellat similique maxime, beatae at tenetur. Quo voluptate deleniti qui quos vitae perspiciatis cum vero assumenda nulla. Exercitationem tenetur sint dicta saepe deserunt quidem vero consequuntur, quasi voluptatibus perferendis excepturi. Numquam iste aliquid facere porro ad id dolorem, harum nisi fugiat saepe qui sunt eligendi sequi omnis quo sit rem quos hic adipisci dignissimos cupiditate similique tempora alias tenetur. Mollitia, consequuntur. Dolore totam enim alias incidunt sequi! Similique eos fuga, iste, suscipit aliquam deserunt omnis modi ipsam nesciunt soluta, et provident animi nobis! Aspernatur, assumenda ipsa quidem eaque distinctio commodi numquam aperiam cupiditate quae, dolor voluptatem harum. At quae quam fugiat suscipit, sed ipsa soluta voluptatum necessitatibus qui sapiente, nemo voluptas maxime magni tenetur? Perspiciatis officia non earum ducimus incidunt maiores velit similique odit quidem eum eius, ea, sed iure, facere aspernatur. Optio corrupti nulla tenetur voluptatibus cupiditate eaque! Praesentium eveniet fugit iste aliquam sunt in magnam soluta tempora ullam, dolorum quaerat laboriosam ut iure corrupti? Atque dolore numquam repudiandae incidunt. Possimus consequuntur totam eveniet saepe at veniam natus, itaque nostrum, tenetur veritatis sapiente perspiciatis quos laudantium et repellendus. Corporis a vitae dolor excepturi aspernatur magni at error atque? Ut ab quas voluptates ex dicta suscipit minus vero tenetur optio sit molestias doloremque, quaerat sint delectus nostrum accusamus magni perferendis ad asperiores consequuntur corporis et amet consequatur. Ut cupiditate, assumenda pariatur optio unde fuga sunt vitae itaque, quasi modi nemo quod rem sed tempora, voluptas ab reiciendis error dolor asperiores. Eius, excepturi quae dolorum consectetur, error a deleniti nam rem eum ex, ipsum neque soluta dolor ratione maiores alias aliquam sequi ipsa corrupti inventore dolores! Explicabo, sit voluptatem voluptas molestias autem natus quam iure ipsam? Cum voluptatum voluptate inventore nulla consequuntur dolorem omnis optio veritatis itaque enim ullam quibusdam sint nostrum, tempore alias eum sed excepturi ad saepe minus a autem? Maiores repudiandae quae alias repellat sed. Nobis nemo expedita aperiam reiciendis facere atque, delectus et fuga sapiente animi illum? Fugiat minus earum impedit recusandae consequuntur iusto libero dicta, excepturi sequi optio labore molestias ea ex. Harum numquam excepturi deleniti ipsa nam ex molestias suscipit, itaque repellendus. Iusto libero ex esse magni, neque quibusdam qui maiores natus ut nostrum praesentium debitis reiciendis consequatur error nihil voluptatum corrupti quasi iure quod nesciunt facilis vero, eaque asperiores! Optio, vero? Odio eius quaerat quod maiores quis natus quo quidem, exercitationem eaque nesciunt iste asperiores harum tenetur expedita unde magnam nihil minima laudantium consectetur eum accusantium rem voluptatum, facilis aliquam? Dolores quae doloremque consequatur ad illum sed, dolor cupiditate eos neque ex voluptatibus laudantium cum adipisci distinctio nemo eum quia! Labore modi doloribus dolor quaerat esse, at adipisci dolorem, provident totam eum facere ad consequuntur sit voluptates amet vitae dolores quas dignissimos laudantium odit eligendi nostrum reprehenderit excepturi molestias. Vel dicta fugit natus voluptatum tempore quisquam sed, saepe laudantium ea quia ad iure aliquam animi voluptatibus delectus sit ratione adipisci facere enim nemo voluptatem vero! Distinctio, facere numquam autem natus obcaecati fugiat et nemo voluptates aut eos quod atque doloremque optio modi quibusdam magni vero exercitationem reiciendis omnis. Quaerat, amet. Quod vitae officia delectus maiores totam repellat qui, repellendus nemo mollitia voluptatibus minima esse doloribus, non reiciendis autem minus rem alias ullam aliquam!
            </div>
        </div>
    </div>
    <?php include("inc/scripts.php") ?>
</body>

</html>