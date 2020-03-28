<?php 




require __DIR__ . '/Formularios/Rutas_Formularios_Publicas.php';

require __DIR__ . '/Noticias/Rutas_Noticias_Publicas.php';

require __DIR__ . '/CV/Ruta_Cv_Publica.php';


//Ruta de Home
Route::get('/' , [                    
  'uses' => 'Publicas\Home_Public_Controller@get_home',
  'as'   => 'get_home']
);


//Contacto
Route::get('/Contacto' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_contacto',
  'as'   => 'get_pagina_contacto']
);

//Empresa
Route::get('/Empresa' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_empresa',
  'as'   => 'get_pagina_empresa']
);

//Servicios
Route::get('/Servicios' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_servicios',
  'as'   => 'get_pagina_servicios']
);



//Pagina Web profesionales
Route::get('/paginas-web-para-profesionales-psicologos-arquitectos-doctores-abogados-y-mas' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_de_web_profesionales',
  'as'   => 'get_pagina_de_web_profesionales']
); 

Route::get('/paginas-web-autoadministrables-para-pymes-sea-una-empresa-grande-o-pequeña' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_de_web_para_pymes',
  'as'   => 'get_pagina_de_web_para_pymes']
); 


Route::get('/programa-para-gestionar-gimnasios-socios' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_programa_para_gestionar_gimancios',
  'as'   => 'get_programa_para_gestionar_gimancios']
); 


Route::get('/programa-para-administrar-academias-de-baile-online' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_programa_para_gestionar_academias_de_baile',
  'as'   => 'get_programa_para_gestionar_academias_de_baile']
); 






