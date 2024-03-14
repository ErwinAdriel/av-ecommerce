<?php
	$categorias = array(['id_categoria' => 1, 'nombre' => 'Auriculares'], 
                    ['id_categoria' => 2, 'nombre' => 'Mouse'],
                    ['id_categoria' => 3, 'nombre' => 'Teclados'],
                    ['id_categoria' => 4, 'nombre' => 'Monitores'],
                    ['id_categoria' => 5, 'nombre' => 'Gabinetes'],
                    ['id_categoria' => 6, 'nombre' => 'Memorias'],
                    ['id_categoria' => 7, 'nombre' => 'Cooler'],
                    ['id_categoria' => 8, 'nombre' => 'Fuentes'],
                    ['id_categoria' => 9, 'nombre' => 'Motherboard']);

	echo json_encode($categorias);
	echo "</br>";
	echo "</br>";

    $marcas = array(['id_marca' => 1, "nombre" => 'Asus'],
                    ['id_marca' => 2, "nombre" => 'Logitech'],
                    ['id_marca' => 3, "nombre" => 'Hyperx'],
                    ['id_marca' => 4, "nombre" => 'Samsung'],
                    ['id_marca' => 5, "nombre" => 'Redragon'],
                    ['id_marca' => 6, "nombre" => 'Corsair'],
                    ['id_marca' => 7, "nombre" => 'Thermaltake'],
                    ['id_marca' => 8, "nombre" => 'Aerocool'],
                    ['id_marca' => 9, "nombre" => 'G. Skill'],
                    ['id_marca' => 10, "nombre" => 'Gigabyte'],
                    ['id_marca' => 11, "nombre" => 'MSI'],
                    ['id_marca' => 12, "nombre" => 'Asrock']);

    echo json_encode($marcas);
    echo "</br>";
	echo "</br>";

    $productos = array(['id_producto' => 1, "destacado" => true, "marca" => 3, "categoria" => 1, "nombre" => '						Auriculares HyperX Cloud', "precio" => 1500, "descripcion" => "Los auriculares HyperX Cloud cuentan con licencia oficial de Sony Interactive Entertainment LLC y están diseñados para los sistemas PlayStation®4. Están hechos específicamente para los jugadores de PS4™ y ofrecen un audio envolvente y una comodidad sorprendente para poder jugar hasta bien entrada la noche.", "modelo" => "Cloud", "imagen" => "1.jpg"],
    	['id_producto' => 2, "destacado" => false, "marca" => 2, "categoria" => 1, "nombre" => 'Auriculares G935', "precio" => 2000, "descripcion" => "Con recubrimiento de goma en el lateral izquierdo y derecho para ofrecer control adicional, el mouse G403 está hecho para amoldarse a tu mano y brindarte confort durante largas sesiones de juego. Con un cuerpo ligero y diseño ergonómico, G403 aporta confort, calidad y duración superiores.", "modelo" => "G935", "imagen" => "2.jpg"],
    	['id_producto' => 3, "destacado" => true, "marca" => 6, "categoria" => 7, "nombre" => 'Cooler CORSAIR LL120', "precio" => 1000, "descripcion" => "The CORSAIR LL120 RGB LED 120mm PWM White Smart Fan boasts 16 individually addressable RGB LEDs spread across two separate light loops in a striking white housing, creating vibrant lighting and visual effects.", "modelo" => "LL120", "imagen" => "3.png"],
    	['id_producto' => 4, "destacado" => false, "marca" => 7, "categoria" => 7, "nombre" => 'Cooler FAN Thermaltake', "precio" => 1000, "descripcion" => "Presenta aspas de compresión, cojinete hidráulico y un anillo LED de 16,8 millones de colores con 9 LED direccionables que está listo para sincronizarse con placas base con capacidad de 5V RGB de Asus, Gigabyte, MSI y AsRock.", "modelo" => "FAN", "imagen" => "4.jpg"],
    	['id_producto' => 5, "destacado" => true, "marca" => 8, "categoria" => 8, "nombre" => 'Fuente Aerocool Gamer 700w', "precio" => 2000, "descripcion" => "Compatible con todos los factores de forma de Intel hasta ATX12V Ver.2.4.", "modelo" => "Gamer", "imagen" => "5.jpg"],
    	['id_producto' => 6, "destacado" => false, "marca" => 7, "categoria" => 8, "nombre" => 'Fuente Thermaltake Smart', "precio" => 2000, "descripcion" => "Thermaltake, como pionero que incorpora luces RGB en PSU, ha lanzado la serie Thermaltake Smart RGB, que viene con un concentrador de ventilador RGB preinstalado de 256 colores con 15 modos de iluminación para elegir y memoria incorporada.", "modelo" => "Smart", "imagen" => "6.jpg"],
    	['id_producto' => 7, "destacado" => true, "marca" => 5, "categoria" => 5, "nombre" => 'Gabinete Gamer Redragon Thundercrack', "precio" => 2000, "descripcion" => "Con un diseño compacto pero que te permitirá mostrar tu sistema, el THUNDERCRACKER nos presenta un panel frontal y lateral de vidrio templado, con lo que podrás lucir la iluminación de sus fans pre-instalados con toda la plenitud de tu sistema.", "modelo" => "Thundercrack", "imagen" => "7.jpg"],
    	['id_producto' => 8, "destacado" => true, "marca" => 9, "categoria" => 6, "nombre" => 'Memoria G.Skill 16GB DDR4', "precio" => 2000, "descripcion" => "16GB DDR4 dual channel kit from G.Skill's TridentZ RGB range. Two matched 8GB modules, rated to run at speeds up to 3200MHz (PC4-25600). 288 pins, and timings of CL16 (16-18-18-38) at 1.35V. Backed by a lifetime warranty. Designed specifically for the Intel based platforms.", "modelo" => "16GB DDR4", "imagen" => "8.jpg"],
    	['id_producto' => 9, "destacado" => false, "marca" => 3, "categoria" => 6, "nombre" => 'Memoria HyperX FURY', "precio" => 2000, "descripcion" => "HyperX® FURY DDR4 RGB1 ofrece una mejora de rendimiento y estilo con velocidades de hasta 3733MHz2, estilo audaz e iluminación RGB a lo largo del módulo para efectos más suaves y llamativos.", "modelo" => "FURY", "imagen" => "9.jpg"],
    	['id_producto' => 10, "destacado" => true, "marca" => 10, "categoria" => 4, "nombre" => 'Monitor Gamer Gigabyte Led 27', "precio" => 2000, "descripcion" => "CV27F es un hermoso monitor curvo 1500R con un diseño elegante que utiliza un panel VA de 8 bits que admite el 90% de DCI-P3.", "modelo" => "CV27F", "imagen" => "10.jpg"],
    	['id_producto' => 11, "destacado" => false, "marca" => 11, "categoria" => 4, "nombre" => 'Monitor  MSI Optix MAG24C', "precio" => 2000, "descripcion" => "Juega en primer nivel con el monitor curvado gaming Optix MAG24C. Equipado con tasa de actualización de 144Hz, tiempo de respuesta de 1ms y panel VA, el monitor Optix MAG24C te ayudará a ver a tus oponentes y apuntar con facilidad.", "modelo" => "MAG24C", "imagen" => "11.jpg"],
    	['id_producto' => 12, "destacado" => true, "marca" => 12, "categoria" => 9, "nombre" => 'Asrock X570 Phantom Gaming', "precio" => 2000, "descripcion" => "The ASRock X570 Phantom Gaming 4 is equipped to support AMD’s ‘Zen 2’, the 3rd generation of the Ryzen Processor family. The chipset features PCIe Gen 4, giving you plenty of headroom for high speed solid state drives and supported PCIe Gen 4 graphics cards, native USB 3.1 Gen 2 ports and an overall more powerful chipset.", "modelo" => "X570", "imagen" => "12.png"],
		['id_producto' => 13, "destacado" => false, "marca" => 10, "categoria" => 9, "nombre" => 'Mother Gigabyte B360', "precio" => 2000, "descripcion" => "Intel B360 AORUS motherboard with M.2 Thermal Guard, RGB Fusion 2.0 with Digital LEDs, Intel GbE LAN with cFosSpeed, Dual M.2 slots, Ultra Durable PCIe Armor, Native Intel USB 3.1 Gen2 Type-A, USB3.1 Gen1 Type-C, Anti-Sulfur Resistor, Intel CNVi WIFI upgradable slot, Smart Fan 5, DualBIOS™, CEC 2019 ready.", "modelo" => "B360", "imagen" => "13.jpg"],
		['id_producto' => 14, "destacado" => true, "marca" => 2, "categoria" => 2, "nombre" => 'Mouse Logitech G403', "precio" => 2000, "descripcion" => "Con recubrimiento de goma en el lateral izquierdo y derecho para ofrecer control adicional, el mouse G403 está hecho para amoldarse a tu mano y brindarte confort durante largas sesiones de juego. Con un cuerpo ligero y diseño ergonómico, G403 aporta confort, calidad y duración superiores.", "modelo" => "G403", "imagen" => "14.jpg"],
		['id_producto' => 15, "destacado" => true, "marca" => 3, "categoria" => 3, "nombre" => 'Teclado HyperX Alloy', "precio" => 2000, "descripcion" => "El teclado HyperX Alloy FPS RGB™ es un teclado atractivo de alto rendimiento diseñado para que se puedan expresar tanto tus habilidades como tu estilo.", "modelo" => "Alloy", "imagen" => "15.jpg"],	
		['id_producto' => 16, "destacado" => true, "marca" => 2, "categoria" => 3, "nombre" => 'Teclado Logitech G815', "precio" => 2000, "descripcion" => "Comprar G815. Cuenta con RGB LIGHTSYNC personalizable, placa superior de aleación de aluminio, 5 teclas G, botones multimedia suaves al tacto y nuevos interruptores GL de perfil bajo.", "modelo" => "G815", "imagen" => "16.jpg"],
		['id_producto' => 17, "destacado" => true, "marca" => 2, "categoria" => 3, "nombre" => 'Teclado Logitech G815', "precio" => 2000, "descripcion" => "Comprar G815. Cuenta con RGB LIGHTSYNC personalizable, placa superior de aleación de aluminio, 5 teclas G, botones multimedia suaves al tacto y nuevos interruptores GL de perfil bajo.", "modelo" => "G815", "imagen" => "16.jpg"],
		['id_producto' => 18, "destacado" => true, "marca" => 2, "categoria" => 3, "nombre" => 'Teclado Logitech G815', "precio" => 2000, "descripcion" => "Comprar G815. Cuenta con RGB LIGHTSYNC personalizable, placa superior de aleación de aluminio, 5 teclas G, botones multimedia suaves al tacto y nuevos interruptores GL de perfil bajo.", "modelo" => "G815", "imagen" => "16.jpg"]);
		
	
	echo json_encode($productos);
	echo "</br>";
	echo "</br>";
	
	$comentarios = array(['id' => 20200621202010, 'email' => 'ejemplo@gmail.com', 'descripcion' => 'Muy bueno', 'rank' => 5, 'producto_id' => 3, 'fecha' => '21/06/2020 20:20'],
		['id' => 20200621202110, 'email' => 'ejemplo@gmail.com', 'descripcion' => 'Muy bueno', 'rank' => 4, 'producto_id' => 10, 'fecha' => '21/06/2020 20:21'],
		['id' => 20200621202111, 'email' => 'ejemplo@gmail.com', 'descripcion' => 'Malo', 'rank' => 2, 'producto_id' => 1, 'fecha' => '21/06/2020 20:21'],
		['id' => 20200621202215, 'email' => 'ejemplo@gmail.com', 'descripcion' => 'Malo', 'rank' => 1, 'producto_id' => 9, 'fecha' => '21/06/2020 20:21'],
		['id' => 20200621202315, 'email' => 'ejemplo@gmail.com', 'descripcion' => 'Bueno', 'rank' => 4, 'producto_id' => 8, 'fecha' => '21/06/2020 20:23'],
		['id' => 20200621202401, 'email' => 'ejemplo@gmail.com', 'descripcion' => 'Bueno', 'rank' => 4, 'producto_id' => 7, 'fecha' => '21/06/2020 20:24'],
		['id' => 20200621202515, 'email' => 'ejemplo@gmail.com', 'descripcion' => 'Bueno', 'rank' => 4, 'producto_id' => 6, 'fecha' => '21/06/2020 20:25'],
		['id' => 20200621202615, 'email' => 'ejemplo@gmail.com', 'descripcion' => 'Bueno', 'rank' => 4, 'producto_id' => 5, 'fecha' => '21/06/2020 20:26'],
		['id' => 20200621212015, 'email' => 'ejemplo@gmail.com', 'descripcion' => 'Muy Bueno', 'rank' => 5, 'producto_id' => 10, 'fecha' => '21/06/2020 21:20'],
		['id' => 20200621223015, 'email' => 'ejemplo@gmail.com', 'descripcion' => 'Muy Bueno', 'rank' => 5, 'producto_id' => 4, 'fecha' => '21/06/2020 22:30'],	);

	echo json_encode($comentarios);
?>