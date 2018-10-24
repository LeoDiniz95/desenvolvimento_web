<?php
	
	switch($link){
		
		
		case "home":{
				include("javascript/home.php");
		}break;
		
		case "produtos":{
				include("paginas/produto.php");
		}break;
		
		case"contatos":{
			include("paginas/contatos.php");
		}break;
		
		case "downloads":{
			include("paginas/downloads.php");
		}break;
		
		case "cadastro":{
			include("paginas/cadastro.php");
		}break;
		
		case "anime":{
			include("anime/Anime.php");
		}break;
		
		case "manga":{
			include("manga/produto_manga.php");
		}break;
		
		case "tcg":{
			include("tcg/produto_tcg.php");
		}break;
		
		case "ygobooster":{
			include("tcg/produto_tcg_ygobooster.php");
		}break;
		
		case "magicbooster":{
			include("tcg/produto_tcg_magicbooster.php");
		}break;
		
		case "pokemonbooster":{
			include("tcg/produto_tcg_pokemonbooster.php");
		}break;
		
		case "ygobox":{
			include("tcg/produto_tcg_ygobox.php");
		}break;
		
		case "magicbox":{
			include("tcg/produto_tcg_magicbox.php");
		}break;
		
		case "pokemonbox":{
			include("tcg/produto_tcg_pokemonbox.php");
		}break;
		
		case "tcg":{
			include("tcg/produto_tcg.php");
		}break;
		
		case "comic":{
			include("comic/produto_comic.php");
		}break;
		
		case "batman":{
			include("comic/batman.php");
		}break;
		
		case "superman":{
			include("comic/superman.php");
		}break;
		
		case "ligada":{
			include("comic/ligadajus.php");
		}break;
		
		case "avengers":{
			include("comic/avengers.php");
		}break;
		
		case "deadpool":{
			include("comic/deadpool.php");
		}break;
		
		case "xmen":{
			include("comic/xmen.php");
		}break;
		
		case "wolverine":{
			include("comic/wolverine.php");
		}break;
		
		case "thor":{
			include("comic/thor.php");
		}break;
		
		case "spiderman":{
			include("comic/spiderman.php");
		}break;
		
		case "ironman":{
			include("comic/ironman.php");
		}break;
		
		case "captain":{
			include("comic/captainamerica.php");
		}break;
		
		
		case "m_dbz":{
			include("manga/m_dbz.php");
		}break;
		
		case "m_cdz":{
			include("manga/m_cdz.php");
		}break;
		
		case "m_another":{
			include("manga/m_another.php");
		}break;
		
		case "m_bleach":{
			include("manga/m_bleach.php");
		}break;
		
		case "m_blood":{
			include("manga/m_blood.php");
		}break;
		
		case "m_bloodc":{
			include("manga/m_bloodc.php");
		}break;
		
		case "m_death":{
			include("manga/m_deathnote.php");
		}break;
		
		case "m_dogday":{
			include("manga/m_dogday.php");
		}break;
		
		case "m_fairy":{
			include("manga/m_fairytail.php");
		}break;
		
		case "m_fullmetal":{
			include("manga/m_fullmetal.php");
		}break;
		
		case "m_hellsing":{
			include("manga/m_hellsing.php");
		}break;
		
		case "m_hotd":{
			include("manga/m_hotd.php");
		}break;
		
		case "m_hunter":{
			include("manga/m_hunterxhunter.php");
		}break;
		
		case "m_mirai":{
			include("manga/m_mirai.php");
		}break;
		
		case "m_mushi":{
			include("manga/m_mushi.php");
		}break;
		
		case "m_naruto":{
			include("manga/m_naruto.php");
		}break;
		
		case "m_neon":{
			include("manga/m_neong.php");
		}break;
		
		case "m_onepiece":{
			include("manga/m_onepiece.php");
		}break;
		
		case "m_champloo":{
			include("manga/m_samuraichamploo.php");
		}break;
		
		case "m_samuraikyo":{
			include("manga/m_samuraideeperkyo.php");
		}break;
		
		case "m_shigeki":{
			include("manga/m_shigeki.php");
		}break;
		
		case "m_tora":{
			include("manga/m_tora.php");
		}break;
		
		case "m_holic":{
			include("manga/m_xxxholic.php");
		}break;
		
		case "m_yuyu":{
			include("manga/m_yuyu.php");
		}break;
		
		default:{
			include("javascript/home.php");
		}break;
		
	}
	
?>