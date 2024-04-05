<?php
class EstatisticasDeSeries{
    public static function obterDuracaoTotalDaSerie($serie){
        $soma = 0;
        $temporadas = [];
        $episodios = [];
        foreach ($serie as $temps) {
            $temporadas[] = $temps->getTemporadas();
        }
        foreach ($temporadas as $epi) {
            $episodios[] = $epi->getEpisodios();
        }
        foreach ($episodios as $epi) {
            $soma += $epi->getDuracao();
        }
        return $soma;
    }
    public static function obterTotalDeEpisodios($serie){
        $temporadas = [];
        $episodios = [];
        foreach ($serie as $temps) {
            $temporadas[] = $temps->getTemporadas();
        }
        foreach ($temporadas as $epi) {
            $episodios[] = $epi->getEpisodios();
        }
        return count($episodios);
    }
    public static function obterPaisesAtoresPersonagens($serie){
        $personagens = [];
        $paisesAtores = [];

        foreach ($serie as $persons) {
            $personagens[] = $persons->getPersonagens();
        }
        foreach ($personagens as $persons) {
            $ator = $persons->getAtor();
            $pais = $ator->getPais();        
            if (isset($paisesAtores[$pais])) {
                $paisesAtores[$pais]++;
            } else {
                $paisesAtores[$pais] = 1;
            }
        }
        return $paisesAtores;
    }
}