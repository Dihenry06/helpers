<?php


namespace DetectaLinguagem;

/**
 * Class DetectaLinguagem
 * @package DetectaLinguagem
 * @author Diogo Henrique Soares Santos
 */
class DetectaLinguagem
{
    public function __construct()
    {
    }

    /**
     * @param string $idioma $_SERVER["HTTP_ACCEPT_LANGUAGE"]
     * @return string
     */
    public function retornaIdioma(string $idioma): string
    {
        $language = substr($idioma, 0, 2);
        return $language;
    }


}