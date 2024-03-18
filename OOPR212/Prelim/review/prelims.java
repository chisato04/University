/*
BUG: some components or all components may not show upon running

FIX: maximize and then unmaximize window after compiling and running
*/
package OOPR212.prelim.review;

import javax.swing.*;
import java.awt.*;
public class prelims {

	public static void main(String[] args) {

		JFrame JFrame = new JFrame("Prelim");
		JFrame.setBounds(5, 5, 800, 600);
		JFrame.setResizable(true);
		JFrame.setVisible(true);

		JPanel JPanel = new JPanel();
		JPanel.setLayout(null);
		JPanel.setBackground(Color.lightGray);
		JFrame.add(JPanel);

		JLabel Header = new JLabel("Registration Form");
		Header.setBounds(280, 30, 120, 20);
		JPanel.add(Header);

		JLabel fnameLabel = new JLabel("First Name");
		fnameLabel.setBounds(50, 80, 75, 20);
		JPanel.add(fnameLabel);

		JTextField fnameText = new JTextField();
		fnameText.setBounds(140, 80, 100, 20);
		JPanel.add(fnameText);

		JLabel lnameLabel = new JLabel("Last Name");
		lnameLabel.setBounds(270, 80, 75, 20);
		JPanel.add(lnameLabel);

		JPasswordField lnameText = new JPasswordField();
		lnameText.setBounds(360, 80, 100, 20);
		JPanel.add(lnameText);

		JLabel mnameLabel = new JLabel("Middle Name");
		mnameLabel.setBounds(490, 80, 75, 20);
		JPanel.add(mnameLabel);

		JTextField mnameText = new JTextField();
		mnameText.setBounds(580, 80, 100, 20);
		JPanel.add(mnameText);

		JLabel gender = new JLabel("Gender");
		gender.setBounds(50, 140, 100, 20);
		JPanel.add(gender);

		JRadioButton maleButton= new JRadioButton("Male");
		JRadioButton femaleButton = new JRadioButton("Female");

		ButtonGroup radioGender = new ButtonGroup();
		radioGender.add(femaleButton);
		radioGender.add(maleButton);

		femaleButton.setBounds(120 ,140 ,100, 20);
		maleButton.setBounds(230 ,140 ,100, 20);
		JPanel.add(femaleButton);
		JPanel.add(maleButton);

		JLabel ageLabel = new JLabel("Age");
		ageLabel.setBounds(400 ,140, 50, 20);
		JPanel.add(ageLabel);

		JTextField ageText = new JTextField();
		ageText.setBounds(450 ,140, 50, 20);
		JPanel.add(ageText);

		JLabel comment = new JLabel("Comments");
		comment.setBounds(50, 200, 100, 20);
		JPanel.add(comment);

		JTextArea commentBox = new JTextArea();
		commentBox.setBounds(150, 200, 200, 200);
		JPanel.add(commentBox);

		JLabel comboLabel = new JLabel("Campus");
		comboLabel.setBounds(380, 200, 75, 20);
		JPanel.add(comboLabel);

		JComboBox comboBox = new JComboBox();
		comboBox.setBounds(445, 200, 75, 30);
		comboBox.addItem("Antipolo");
		comboBox.addItem("Valenzuela");
		comboBox.addItem("Quezon");
		comboBox.addItem("Pampanga");
		JPanel.add(comboBox);

		JButton submitBtn = new JButton("Submit");
		submitBtn.setBounds(240 ,440, 100, 50);
		JPanel.add(submitBtn);

		JButton cancelBtn = new JButton("Cancel");
		cancelBtn.setBounds(350 ,440, 100, 50);
		JPanel.add(cancelBtn);
	}
}