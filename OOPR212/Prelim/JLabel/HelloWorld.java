package OOPR212.prelim.JLabel;

import javax.swing.*;

public class HelloWorld{

    public static void main(String[] args) {

        JLabel labelHelloWorld = new JLabel("Hello World! I love Java!");
        labelHelloWorld.setName("labelHelloWorld");

        JFrame frame = new JFrame( "Hello World");
        frame.setSize(300,200);
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setLayout(new BoxLayout(frame.getContentPane(), BoxLayout.Y_AXIS));
        frame.add(labelHelloWorld);
        frame.setVisible(true);
        frame.setTitle("Hello World!");
    }
}
