package OOPR212.Prelim.JRadioButton;
import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class radiobutton2 extends JFrame {
    private JRadioButton charRadioButton, intRadioButton, booleanRadioButton, stringRadioButton;
    private JButton checkButton;
    private JLabel resultLabel;

    public radiobutton2() {
        setTitle("Questionnaire");
        setSize(300, 200);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        // Initialize components
        charRadioButton = new JRadioButton("char");
        intRadioButton = new JRadioButton("int");
        booleanRadioButton = new JRadioButton("boolean");
        stringRadioButton = new JRadioButton("string");
        charRadioButton.setName("charRadioButton");
        intRadioButton.setName("intRadioButton");
        booleanRadioButton.setName("booleanRadioButton");
        stringRadioButton.setName("stringRadioButton");

        ButtonGroup buttonGroup = new ButtonGroup();
        buttonGroup.add(charRadioButton);
        buttonGroup.add(intRadioButton);
        buttonGroup.add(booleanRadioButton);
        buttonGroup.add(stringRadioButton);

        checkButton = new JButton("Check");
        resultLabel = new JLabel("");
        checkButton.setName("checkButton");
        resultLabel.setName("resultLabel");

        // Set layout
        setLayout(new GridLayout(5, 1));

        // Add components to the frame
        add(charRadioButton);
        add(intRadioButton);
        add(booleanRadioButton);
        add(stringRadioButton);
        add(checkButton);
        add(resultLabel);

        // Add ActionListener to the checkButton
        checkButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                // Check if the correct answer is selected
                if (stringRadioButton.isSelected()) {
                    resultLabel.setText("Correct!");
                } else {
                    resultLabel.setText("Incorrect!");
                }
            }
        });
    }

    public static void main(String[] args) {
        SwingUtilities.invokeLater(new Runnable() {
            @Override
            public void run() {
                radiobutton2 questionnaire = new radiobutton2();
                questionnaire.setVisible(true);
            }
        });
    }
}
