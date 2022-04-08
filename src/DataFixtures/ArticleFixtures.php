<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i= 0 ; $i < 11; $i++){
         $article = new Article();

         $article->setTitle("Article n° $i");
         $article->setContent("Logoden biniou degemer mat an penn ar bed war, loar an itron kaeraat kar debriñ askorn e tad, gwern beleg kig pleg mesk da evidoc'h. Stivell ha troc’hañ etrezek hadañ tiegezh vi bed sav, vered tamm kichen las bolz goullo poazh kousket ganto, Sun dilhad leziregezh dimezell c’hwevrer ler bouzar. Bez poultrenn leal mañ evidout anezhañ pehini kemener krouiñ, Pempoull da pont fellout e ti soudard touellañ benveg, ebrel ha kann leue lezirek drezi c’hi. Aour kregiñ rak  benveg beuziñ Arzhon-Rewiz brank kalz kaout, gozh chase oentr da prennañ gador biz gwellañ doug, skeud izel houarn merenn an gwalenn spi. Meud jod c’hreisteiz kentañ gwiskamant Lanuon Konk egistomp gwinizh, an darn tal gwec’h glebiañ maez vuhez planken ur, skignañ torfed Orient druez Ar Vouster barzh dilun. A melen meurzh sellout kelien Remengol da tennañ ha, enno lizher arc’h dianav karr war dor bloaz poan, fur hanter c’haier liv Roazhon Perros-Gireg Montroulez. Solier eno a falc’hat ha amprevan ilin magañ dall, mignonez garv nebeutoc’h c’hazh kêr birviñ ken Brieg a, antronoz Plouha porzh bezh Kastell-Paol estreget  labourat. Loen gwastell sal gwez prenañ aour vantell hejañ a, Yec’hed Naoned walc’h pesketaer gwener oas Pont’n-Abad ket loar, war vatezh bagad hantereur feunten nijal enez. Gouiziek naetaat ganit kiger prest Kastell-Paol Plouzane an den, kaeraat dlead difenn gwalc’hiñ keloù loa fuzuilh kurun lemm, degas sac’h dispign troc’hañ treiñ zo gouriz. Trec’h wech pakañ kaier micherour gwinegr kar us ar naet priz vignonez gousperoù Sant-Nouga, mesk gantañ garm goulenn c’hoarzhin Plelann-Veur eoul ivez dit gwalc’hiñ nemet.");
         $article->setCreatedAt(new \DateTime());
         $article->setUpdatedAt(new \DateTime());
         $article->setSlug("article-$i");
         $article->setIsPublished(true);
         
         $manager->persist($article);
        }
        $manager->flush();
    }
}
