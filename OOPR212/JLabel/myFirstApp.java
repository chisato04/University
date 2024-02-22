package OOPR212.JLabel;

import javax.swing.*;

public class myFirstApp{

    public static void main(String[] args) {

        JLabel label1 = new JLabel("Hello World!");
        label1.setName("label1");
        JLabel label2 = new JLabel("I love programming");
        label2.setName("label2");
        JLabel label3 = new JLabel("I love CodeChum");
        label3.setName("label3");
        JLabel label4 = new JLabel("I love Java");
        label4.setName("label4");

        JFrame frame = new JFrame( "My First App");
        frame.setSize(300,300);
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setLayout(new BoxLayout(frame.getContentPane(), BoxLayout.Y_AXIS));
        frame.add(label1);
        frame.add(label2);
        frame.add(label3);
        frame.add(label4);
        frame.setVisible(true);
    }
}
