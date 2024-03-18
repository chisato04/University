package OOPR212.prelim.JButton;
import javax.swing.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.JPanel;

public class malinaoJButton1 {
	public static void main(String[] args) {

		JFrame frame = new JFrame("Case Switch");
		frame.setSize(500, 300);
		frame.setVisible(true);

		JLabel labelText = new JLabel("I love programming!");
		labelText.setName("textLabel");
		labelText.setBounds(50, 50, 150, 150);

		JPanel panel = new JPanel();
		panel.setLayout(null);

		JButton switchVowelCaseButton = new JButton("Vowels");
		switchVowelCaseButton.setBounds(30, 200, 100, 50);
		switchVowelCaseButton.setName("switchVowelCaseButton");

		JButton switchConsonantCaseButton = new JButton("Consonant");
		switchConsonantCaseButton.setBounds(150, 200, 100, 50);
		switchConsonantCaseButton.setName("switchConsonantCaseButton");

		JButton switchAllCaseButton = new JButton("All");
		switchAllCaseButton.setBounds(300, 200, 100, 50);
		switchAllCaseButton.setName("switchAllCaseButton");

		panel.add(labelText);
		panel.add(switchVowelCaseButton);
		panel.add(switchConsonantCaseButton);
		panel.add(switchAllCaseButton);

		switchVowelCaseButton.addActionListener(new ActionListener()
        {
			public void actionPerformed(ActionEvent e)
            {
				String text = labelText.getText();
				text = switchCase(text, "aeiouAEIOU");
				labelText.setText(text);
			}

			private String switchCase(String text, String switchChars)
            {
				char[] characterArray = text.toCharArray();
				for(int i = 0; i < characterArray.length; i++)
                {
					char c = characterArray[i];
					if(switchChars.indexOf(c) != -1)
                    {
						if(Character.isUpperCase(c)) {
							characterArray[i] = Character.toLowerCase(c);
						}else {
							characterArray[i] = Character.toUpperCase(c);
						}
					}
				}
				return new String(characterArray);
			}
		});

		switchConsonantCaseButton.addActionListener(new ActionListener()
        {
			public void actionPerformed(ActionEvent e)
            {
				String text = labelText.getText();
				text = switchCase(text, "bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ");
				labelText.setText(text);
			}

			private String switchCase(String text, String switchChars)
            {
				char[] characterArray = text.toCharArray();
				for(int i = 0; i < characterArray.length; i++) {
					char c = characterArray[i];
					if(switchChars.indexOf(c) != -1) {
						if(Character.isUpperCase(c)) {
							characterArray[i] = Character.toLowerCase(c);
						}else {
							characterArray[i] = Character.toUpperCase(c);
						}
					}
				}
				return new String(characterArray);
			}
		});

		switchAllCaseButton.addActionListener(new ActionListener()
        {
			public void actionPerformed(ActionEvent e) {
				String text = labelText.getText();
				text = switchCase(text, "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ");
				labelText.setText(text);
			}

			private String switchCase(String text, String switchChars)
            {
				char[] characterArray = text.toCharArray();
				for(int i = 0; i < characterArray.length; i++) {
					char c = characterArray[i];
					if(switchChars.indexOf(c) != -1) {
						if(Character.isUpperCase(c)) {
							characterArray[i] = Character.toLowerCase(c);
						}else {
							characterArray[i] = Character.toUpperCase(c);
						}
					}
				}
				return new String(characterArray);
			}
		});

		frame.add(panel);

	}

}
