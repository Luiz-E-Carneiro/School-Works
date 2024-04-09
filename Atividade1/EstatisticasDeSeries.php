<?php
class EstatisticasDeSeries{
    public static function obterDuracaoTotalDaSerie($serie){
        $soma = 0;
        foreach ($serie->getTemporadas() as $temporada) {
            foreach ($temporada->getEpisodios() as $episodio) {
                $soma += $episodio->getDuracao();
            }
        }
        return $soma;
    }
    public static function obterTotalDeEpisodios($serie){
        $total = 0;
        foreach ($serie->getTemporadas() as $temporada) {
            $total += count($temporada->getEpisodios());
        }
        return $total;
    }
    public static function obterPaisesAtoresPersonagens($serie){
        $paisesAtores = [];

        foreach ($serie->getPersonagens() as $personagem) {
            $ator = $personagem->getAtor();
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