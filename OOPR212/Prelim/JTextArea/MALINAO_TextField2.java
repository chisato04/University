package OOPR212.Prelim.JTextArea;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

	public class MALINAO_TextField2
	{
		public static void main(String[] args) {
	        JFrame frameMalinao = new JFrame("Word & Character Counter");
	        frameMalinao.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
			frameMalinao.setLocationRelativeTo(null);
	        frameMalinao.setSize(400, 300);

	        JPanel panelMalinao = new JPanel(new GridLayout(4, 1));
	        JTextArea textArea = new JTextArea();
	        textArea.setName("textArea");

	        JLabel wordCountMalinao = new JLabel();
	        wordCountMalinao.setName("wordCountLabel");

	        JLabel charCountMalinao = new JLabel();
	        charCountMalinao.setName("charCountLabel");

	        JButton countButton = new JButton("Display Count");
	        countButton.setName("countButton");
	        countButton.addActionListener(new ActionListener() {
	            @Override
	            public void actionPerformed(ActionEvent e) {
	                String text = textArea.getText();
	                int wordCount = countWords(text);
	                int charCount = text.length();
	                wordCountMalinao.setText(String.valueOf(wordCount));
	                charCountMalinao.setText(String.valueOf(charCount));
	            }
	        });

	        panelMalinao.add(textArea);
	        panelMalinao.add(wordCountMalinao);
	        panelMalinao.add(charCountMalinao);
	        panelMalinao.add(countButton);
	        frameMalinao.getContentPane().add(panelMalinao);
	        frameMalinao.setVisible(true);
		}

		private static int countWords(String text) {
	        if (text == null || text.isEmpty()) {
	            return 0;
	        }
	        String[] words = text.split("\\s+");
	        return words.length;
	    }
	}