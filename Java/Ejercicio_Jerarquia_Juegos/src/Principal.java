
public class Principal {

	public static void main(String[] args) {
		Juego[] juegos = new Juego[10];
		
	    juegos[0] = new Juego("Call of Duty", "Activision", 80);
	    juegos[1] = new Juego("Minecraft", "Mojang", 90);

	    juegos[2] = new JuegoAccion("God of War", "Sony", 90, 25, 300);
	    juegos[3] = new JuegoAccion("DOOM Eternal", "Bethesda", 85, 20, 500);

	    juegos[4] = new JuegoEstrategia("Age of Empires II", "Microsoft", 88, 40, 200);
	    juegos[5] = new JuegoEstrategia("StarCraft II", "Blizzard", 92, 60, 350);

	    juegos[6] = new JuegoDeporte("FIFA 23", "EA Sports", 75, 30, 120);
	    juegos[7] = new JuegoDeporte("NBA 2K24", "2K Sports", 78, 25, 980);
			    
	    
    	int puntuacionFinal = 0;
    	int juegoGanador = 0;
    	
	    for (int contador = 0; contador<juegos.length; contador++) {
	    	
	    	if(juegos[contador]!= null) {
		    	System.out.println(juegos[contador]);
		    	System.out.println("Puntuación final: " + juegos[contador].calcularPuntuacionFinal());
		    	
		    	if(puntuacionFinal < juegos[contador].calcularPuntuacionFinal()) {
		    		juegoGanador = contador;
		    	}
		    	
		    	puntuacionFinal += juegos[contador].calcularPuntuacionFinal();
		    	
		    			
		    	System.out.println("\n");
	    	}
	    	
	    }
	    
    	System.out.println("Puntuación Final: " + puntuacionFinal);
    	System.out.println("El juego con mayor puntuación es: " + juegos[juegoGanador] + " el cual cuenta con una puntuación final de: " + juegos[juegoGanador].calcularPuntuacionFinal());

	}

}	
