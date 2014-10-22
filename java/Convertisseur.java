import java.io.*;

public class Convertisseur{

	public static void main (String [] args){

		for(int i=0; i<args.length(); i++){
			try{
				String filename = args[i];
				File entree = new File(filename);
				File sortie = new File("../data/"+filename);
				BufferedReader br = new BufferedReader(new FileReader(entree));
				BufferedWriter bw = new BufferedWriter(new FileWriter(sortie));

				String ligne = "";
				int i;

				while ((ligne = br.readLine()) != null){
					ligne = ligne.replace(";", ",");
					bw.write(ligne+"\n");
					bw.flush();
				}
				bw.close();
				br.close();
				System.out.println(filename + " convertit avec succes");
			}
			catch(IOException e){
				e.printStackTrace();
				System.out.println("Erreur lors de l'ouverture du fichier");
			}
			catch(Exception e){
				e.printStackTrace();
			}
		}
	}
}