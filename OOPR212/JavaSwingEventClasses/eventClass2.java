package OOPR212.JavaSwingEventClasses;

import javax.swing.*;
import javax.swing.event.*;

public class eventClass2
{
	public eventClass2()
    {
		JTextArea textArea1 = new JTextArea();
        textArea1.setName("textArea1");
        textArea1.setBounds(10, 20, 200, 250);

        JTextArea textArea2 = new JTextArea();
        textArea2.setName("textArea2");
        textArea2.setBounds(220, 20, 200, 250);
        textArea2.setEditable(false);

        textArea1.getDocument().addDocumentListener(new DocumentListener()
        {
            public void insertUpdate(DocumentEvent e)
            {
                updateText();
            }

            public void removeUpdate(DocumentEvent e)
            {
                updateText();
            }

            public void changedUpdate(DocumentEvent e)
            {
                updateText();
            }

            private void updateText()
            {
                String text = textArea1.getText();
                StringBuilder result = new StringBuilder();
                for (char c : text.toCharArray()) {
                    if (!isVowel(c)) {
                        result.append(c);
                    } else {
                        result.append(Character.toUpperCase(c));
                    }
                }
                textArea2.setText(result.toString());
            }
        });

        JPanel panel = new JPanel(null);
        panel.add(textArea1);
        panel.add(textArea2);

        JFrame frame = new JFrame("LOGIN");
        frame.setSize(500, 300);
        frame.setLocationRelativeTo(null);
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.add(panel);
        frame.setVisible(true);
    }

    private boolean isVowel(char c) {
        return "AEIOUaeiou".indexOf(c) != -1;
    }

    public static void main(String[] args) {
        new eventClass2();
    }
}