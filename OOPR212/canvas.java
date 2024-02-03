package OOPR212;

import java.awt.*;
import javax.swing.*;

public class canvas extends JFrame{


    panel panel;

    canvas(){

        panel = new panel();
        this.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        this.add(panel);
        this.pack();
        this.setLocationRelativeTo(null);
        this.setVisible(true);
    }



}//end of code