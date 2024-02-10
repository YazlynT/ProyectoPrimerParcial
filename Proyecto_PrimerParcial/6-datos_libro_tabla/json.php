<?php
 $data=[];
$data[]=[
 "Nombre" =>"Libro1",
 "Autor" =>"Hnzel",
 "Paginas" =>"300",
 "isbn" =>"123456789",
 "Capitulo" =>[
     [

    "capitulo"=>"20",
    "paginas"=>"17"

     ],
 [
    "capitulo"=>"45",
    "paginas"=>"10"

 ]

 ]];
 
 
 $data[]=[
    "Nombre" =>"Libro2",
    "Autor" =>"Elias",
    "Paginas" =>"300",
    "isbn" =>"123456789",
    "Capitulo" =>[
        [
   
       "capitulo"=>"10",
       "paginas"=>"17"
   
        ],
    [
       "capitulo"=>"45",
       "paginas"=>"10"
   
    ]
   
    ]];


    $data[]=[
        "Nombre" =>"Libro 3",
        "Autor" =>"Marcos",
        "Paginas" =>"300",
        "isbn" =>"123456789",
        "Capitulo" =>[
            [
       
           "capitulo"=>"10",
           "paginas"=>"17"
       
            ],
        [
           "capitulo"=>"45",
           "paginas"=>"10"
       
        ]
       
        ]];

        $data[]=[
            "Nombre" =>"Libro4",
            "Autor" =>"Luis",
            "Paginas" =>"300",
            "isbn" =>"123456789",
            "Capitulo" =>[
                [
           
               "capitulo"=>"10",
               "paginas"=>"17"
           
                ],
            [
               "capitulo"=>"45",
               "paginas"=>"10"
           
            ]
           
            ]];

            $data[]=[
                "Nombre" =>"Libro5",
                "Autor" =>"Elias",
                "Paginas" =>"300",
                "isbn" =>"123456789",
                "Capitulo" =>[
                    [
               
                   "capitulo"=>"10",
                   "paginas"=>"17"
               
                    ],
                [
                   "capitulo"=>"45",
                   "paginas"=>"10"
               
                ]
               
                ]];

                
                    $data[]=[
                        "Nombre" =>"Libro6",
                        "Autor" =>"Elias",
                        "Paginas" =>"300",
                        "isbn" =>"123456789",
                        "Capitulo" =>[
                            [
                       
                           "capitulo"=>"10",
                           "paginas"=>"17"
                       
                            ],
                        [
                           "capitulo"=>"45",
                           "paginas"=>"10"
                       
                        ]
                       
                        ]];
                        $data[]=[
                            "Nombre" =>"Libro7",
                            "Autor" =>"Elias",
                            "Paginas" =>"300",
                            "isbn" =>"123456789",
                            "Capitulo" =>[
                                [
                           
                               "capitulo"=>"10",
                               "paginas"=>"17"
                           
                                ],
                            [
                               "capitulo"=>"45",
                               "paginas"=>"10"
                           
                            ]
                           
                            ]];
                            $data[]=[
                                "Nombre" =>"Libro8",
                                "Autor" =>"Elias",
                                "Paginas" =>"300",
                                "isbn" =>"123456789",
                                "Capitulo" =>[
                                    [
                               
                                   "capitulo"=>"10",
                                   "paginas"=>"17"
                               
                                    ],
                                [
                                   "capitulo"=>"45",
                                   "paginas"=>"10"
                               
                                ]
                               
                                ]];

                                $data[]=[
                                    "Nombre" =>"Libro9",
                                    "Autor" =>"Elias",
                                    "Paginas" =>"300",
                                    "isbn" =>"123456789",
                                    "Capitulo" =>[
                                        [
                                   
                                       "capitulo"=>"10",
                                       "paginas"=>"17"
                                   
                                        ],
                                    [
                                       "capitulo"=>"45",
                                       "paginas"=>"10"
                                   
                                    ]
                                   
                                    ]];

                                    $data[]=[
                                        "Nombre" =>"Libro10",
                                        "Autor" =>"Elias",
                                        "Paginas" =>"300",
                                        "isbn" =>"123456789",
                                        "Capitulo" =>[
                                            [
                                       
                                           "capitulo"=>"10",
                                           "paginas"=>"17"
                                       
                                            ],
                                        [
                                           "capitulo"=>"45",
                                           "paginas"=>"10"
                                       
                                        ]
                                       
                                        ]];
                                    
                                
                            
                        
                
            
        echo json_encode(['data' => $data]);
 ?>