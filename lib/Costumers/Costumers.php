<?php
class Costumers
{
    /**
     *
     */
    public function __construct()
    {
    }

    /**
     *
     */
    public function __destruct()
    {
    }
    
    /**
     * Set friendly columns\' names to order tables\' entries
     */
    public function setOrderingValues()
    {
        $ordering = [
            
            'f_name' => 'Nome',
            'l_name' => 'Sobrenome',
            'gender' => 'Genero',
            'id' => 'ID',
        ];

        return $ordering;
    }
}
?>
