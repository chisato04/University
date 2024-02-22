package OOPR212.JPassword;

import javax.swing.*;

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class jpass2
{

	public jpass2 ()
	{
		JLabel LblMalinao = new JLabel("Username:");
		LblMalinao.setName("TextLabel");
		LblMalinao.setBounds(30, 50, 200, 30);

		JTextField UsernameMalinao = new JTextField(20);
		UsernameMalinao.setName("usernameTextField");
		UsernameMalinao.setBounds(100, 50, 200, 30);

		JLabel LabelMalinao = new JLabel("Password:");
		LabelMalinao.setName("label");
		LabelMalinao.setBounds(30, 100, 200, 30);

		JPasswordField PasswordMalinao = new JPasswordField (20);
		PasswordMalinao.setName ("passwordTextField");
		PasswordMalinao.setBounds(100, 100, 200, 30);
		PasswordMalinao.setEchoChar('*');

		JButton loginButton = new JButton("Login");
		loginButton.setName("loginButton");
		loginButton.setBounds(100, 180, 120, 50);
		loginButton.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {

            	  String username = UsernameMalinao.getText();
                  String password = new String(PasswordMalinao.getPassword());

                  if (username.equals(password)) {
                      JOptionPane.showMessageDialog(null, "Success!");
                  } else {
                      JOptionPane.showMessageDialog(null, "Failed!");
                  }

            }
        });

		//Panel
        JPanel PanelMalinao = new JPanel(null);
        PanelMalinao.add(LblMalinao);
        PanelMalinao.add(UsernameMalinao);
        PanelMalinao.add(LabelMalinao);
        PanelMalinao.add(PasswordMalinao);
        PanelMalinao.add(loginButton);

        //Frame
        JFrame FrameMalinao = new JFrame();
        FrameMalinao.setTitle("Text Validator");
        FrameMalinao.add(PanelMalinao);
        FrameMalinao.setSize(350, 350);
        FrameMalinao.setLocationRelativeTo(null);
        FrameMalinao.setVisible(true);
        FrameMalinao.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
	}

	public static void main(String[] args) {

		new jpass2();
	}
}