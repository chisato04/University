package OOPR212.Prelim.JComboBox;
import javax.swing.*;
import java.awt.event.*;
import java.awt.*;

public class jcombobox2 {

    public static void main(String[] args) {
        JFrame frameMalinao = new JFrame("My Pet");
        frameMalinao.setSize(500, 800);
        frameMalinao.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        JTextField petNameTextField = new JTextField();

        petNameTextField.setName("petNameTextField");

        petNameTextField.setSize(100, 50);

        JComboBox<String> petTypeComboBox = new JComboBox<>();
        petTypeComboBox.addItem("Dog");
        petTypeComboBox.addItem("Cat");
        petTypeComboBox.addItem("Rabbit");
        petTypeComboBox.addItem("Parrot");
        petTypeComboBox.setName("petTypeComboBox");

        JButton generateTextButton = new JButton("Generate");
        generateTextButton.setName("generateTextButton");

        JLabel displayLabel = new JLabel();
        displayLabel.setName("displayLabel");

        generateTextButton.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                String pet = (String) petTypeComboBox.getSelectedItem();
                String name = (String) petNameTextField.getText();
                String firstLetter = name.substring(0, 1);
                firstLetter = firstLetter.toUpperCase();
                String restofname = name.substring(1);
                String fullname = firstLetter + restofname;
                displayLabel.setText("The pet is a " + pet.toLowerCase() + " named " + fullname);
            }
        });

        frameMalinao.setLayout(new FlowLayout());
        frameMalinao.add(petNameTextField);
        frameMalinao.add(petTypeComboBox);
        frameMalinao.add(generateTextButton);
        frameMalinao.add(displayLabel);
        frameMalinao.setVisible(true);
    }
}
