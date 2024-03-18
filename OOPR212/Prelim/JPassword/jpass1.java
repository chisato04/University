package OOPR212.prelim.JPassword;
import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

public class jpass1 extends JFrame implements ActionListener {

    private JPasswordField passwordTextField;
    private JLabel resultLabel;

    public jpass1() {
        super("Text Validator");
        setLayout(new GridBagLayout());

        JLabel textLabel = new JLabel("Text:");
        textLabel.setName("textLabel");
        GridBagConstraints c = new GridBagConstraints();
        c.gridx = 0;
        c.gridy = 0;
        add(textLabel, c);
        passwordTextField = new JPasswordField(20);
        passwordTextField.setName("passwordTextField");
        c.gridx = 1;
        c.gridy = 0;
        add(passwordTextField, c);
        JButton validateButton = new JButton("Validate");
        validateButton.setName("validateButton");
        validateButton.addActionListener(this);
        c.gridx = 2;
        c.gridy = 0;
        add(validateButton, c);
        resultLabel = new JLabel("");
        resultLabel.setName("resultLabel");
        c.gridx = 0;
        c.gridy = 1;
        c.gridwidth = 3;
        add(resultLabel, c);
        setSize(400, 100);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setVisible(true);
    }

    public void actionPerformed(ActionEvent e) {
        String text = passwordTextField.getText(); //depracated
        boolean hasSpecialChars = false;

        for (int i = 0; i < text.length(); i++) {
            char ch = text.charAt(i);
            if (!Character.isLetterOrDigit(ch)) {
                hasSpecialChars = true;
                break;
            }
        }

        if (hasSpecialChars) {
            resultLabel.setText("Has special characters");
        } else {
            resultLabel.setText("No special characters");
        }
    }

    public static void main(String[] args) {
        new jpass1();
    }
}