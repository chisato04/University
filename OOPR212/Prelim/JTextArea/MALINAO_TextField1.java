package OOPR212.prelim.JTextArea;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class MALINAO_TextField1
{
	public static void main (String[] args)
	{
		JFrame frameMalinao = new JFrame ("Text Repeater");
		frameMalinao.setDefaultCloseOperation (JFrame.EXIT_ON_CLOSE);
		frameMalinao.setSize(400, 300);
		frameMalinao.setLocationRelativeTo (null);

		JPanel panelMalinao = new JPanel (new GridLayout(4,1));

		JTextField textFieldMalinao = new JTextField();
		textFieldMalinao.setName("textField");

		JTextField numTextFieldMalinao = new JTextField();
		numTextFieldMalinao.setName("numberTextField");

		JTextArea resultMalinao = new JTextArea();
		resultMalinao.setName ("resultTextArea");
		resultMalinao.setEditable(false);

		JButton displayTextButton = new JButton ("Display Text");
		displayTextButton.setName ("displayTextButton");
		displayTextButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                String text = textFieldMalinao.getText();
                String repeatCountText = numTextFieldMalinao.getText();
                boolean validInput = true;
                for (char c : repeatCountText.toCharArray()) {
                    if (!Character.isDigit(c)) {
                        validInput = false;
                        break;
                    }
                }
                if (validInput && !repeatCountText.isEmpty()) {
                    int repeatCount = 0;
                    for (int i = 0; i < repeatCountText.length(); i++) {
                        repeatCount = repeatCount * 10 + (repeatCountText.charAt(i) - '0');
                    }

                    StringBuilder repeatedText = new StringBuilder();
                    for (int i = 0; i < repeatCount; i++) {
                        repeatedText.append(text);
                        if (i != repeatCount - 1) {
                            repeatedText.append(" ");
                        }
                    }

                    resultMalinao.setText(repeatedText.toString());
                } else {
                    JOptionPane.showMessageDialog(frameMalinao, "Enter a valid number.");
                }
            }
        });

		panelMalinao.add(textFieldMalinao);
		panelMalinao.add(numTextFieldMalinao);
		panelMalinao.add(displayTextButton);
		panelMalinao.add(new JScrollPane(resultMalinao));
		frameMalinao.getContentPane().add(panelMalinao);
		frameMalinao.setVisible(true);

	}

}