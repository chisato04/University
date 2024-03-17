package OOPR212.Prelim.activity1;
import javax.swing.*;

public class Activity1_Malinao extends JFrame{

    Malinao_panel frame;

    Activity1_Malinao(){

        frame = new Malinao_panel();
        this.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        this.add(frame);
        this.pack();
        this.setTitle("Philippine Flag by Malinao");
        this.setLocationRelativeTo(null);
        this.setVisible(true);
    }

        public static void main(String[] args) {
            new Activity1_Malinao();
        }
} //end of code
