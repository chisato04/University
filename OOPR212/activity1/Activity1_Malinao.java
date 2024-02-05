package OOPR212.activity1;

import javax.swing.*;

public class Activity1_Malinao extends JFrame{

    panel panel;

    Activity1_Malinao(){

        panel = new panel();
        this.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        this.add(panel);
        this.pack();
        this.setTitle("Philippine Flag by Malinao");
        this.setLocationRelativeTo(null);
        this.setVisible(true);
    }

        public static void main(String[] args) {
            new Activity1_Malinao();
        }
} //end of code
