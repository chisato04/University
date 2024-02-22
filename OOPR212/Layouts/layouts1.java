//layout 1
package OOPR212.Layouts;
import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class layouts1 extends JFrame implements ActionListener {
    private JPanel cardPanel, firstPanel, secondPanel, thirdPanel, navPanel;
    private JTextField nameTextField, ageTextField;
    private JTextArea quoteTextArea;
    private JLabel nameLabel, ageLabel, quoteLabel;
    private JButton prevButton, nextButton;

    public layouts1() {
        setTitle("Info Recorder");
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setLayout(new BorderLayout());

        cardPanel = new JPanel(new CardLayout());
        cardPanel.setName("cardPanel");

        // First Panel
        firstPanel = new JPanel(new GridLayout(2, 2));
        firstPanel.setName("firstPanel");
        nameTextField = new JTextField();
        nameTextField.setName("nameTextField");
        ageTextField = new JTextField();
        ageTextField.setName("ageTextField");
        firstPanel.add(new JLabel("Name: "));
        firstPanel.add(nameTextField);
        firstPanel.add(new JLabel("Age: "));
        firstPanel.add(ageTextField);

        // Second Panel
        secondPanel = new JPanel();
        secondPanel.setName("secondPanel");
        secondPanel.setLayout(new BoxLayout(secondPanel, BoxLayout.Y_AXIS));
        quoteTextArea = new JTextArea(5, 20);
        quoteTextArea.setName("quoteTextArea");
        quoteTextArea.setLineWrap(true);
        quoteTextArea.setWrapStyleWord(true);
        JScrollPane scrollPane = new JScrollPane(quoteTextArea);
        secondPanel.add(scrollPane);

        // Third Panel
        thirdPanel = new JPanel(new GridLayout(3, 1));
        thirdPanel.setName("thirdPanel");
        nameLabel = new JLabel();
        nameLabel.setName("nameLabel");
        ageLabel = new JLabel();
        ageLabel.setName("ageLabel");
        quoteLabel = new JLabel();
        quoteLabel.setName("quoteLabel");
        thirdPanel.add(nameLabel);
        thirdPanel.add(ageLabel);
        thirdPanel.add(quoteLabel);

        cardPanel.add(firstPanel, "First Panel");
        cardPanel.add(secondPanel, "Second Panel");
        cardPanel.add(thirdPanel, "Third Panel");

        add(cardPanel, BorderLayout.CENTER);

        // Navigation Panel
        navPanel = new JPanel(new FlowLayout(FlowLayout.CENTER));
        navPanel.setName("navPanel");
        prevButton = new JButton("Previous");
        prevButton.setName("prevButton");
        nextButton = new JButton("Next");
        nextButton.setName("nextButton");
        prevButton.addActionListener(this);
        nextButton.addActionListener(this);
        navPanel.add(prevButton);
        navPanel.add(nextButton);
        add(navPanel, BorderLayout.SOUTH);

        // Show first panel by default
        CardLayout cl = (CardLayout) (cardPanel.getLayout());
        cl.show(cardPanel, "First Panel");
        prevButton.setEnabled(false); // Disable prevButton on first page

        pack();
        setVisible(true);
    }

    public void actionPerformed(ActionEvent e) {
        CardLayout cl = (CardLayout) (cardPanel.getLayout());

        // Determine the current panel being displayed
        Component currentComponent = null;
        for (Component comp : cardPanel.getComponents()) {
            if (comp.isVisible()) {
                currentComponent = comp;
                break;
            }
        }

        // Handling navigation actions
        if (e.getSource() == nextButton) {
            if (currentComponent == firstPanel) {
                nameTextField.getText();
                ageTextField.getText();
                cl.next(cardPanel);
                prevButton.setEnabled(true);
                nextButton.setEnabled(true);
                if (currentComponent == firstPanel) {
                    prevButton.setVisible(true);
                }
            } else if (currentComponent == secondPanel) {
                quoteTextArea.getText();
                cl.next(cardPanel);
                nextButton.setEnabled(false);
                updateLabels();
            }
        } else if (e.getSource() == prevButton) {
            cl.previous(cardPanel);
            nextButton.setEnabled(true);
            if (currentComponent == firstPanel) {
                prevButton.setEnabled(false);
            }
            if (currentComponent == thirdPanel) {
                nextButton.setVisible(true);
            }
        }
    }



    private void updateLabels() {
        nameLabel.setText(nameTextField.getText());
        ageLabel.setText(ageTextField.getText());
        quoteLabel.setText(quoteTextArea.getText());
    }

    public static void main(String[] args) {
        SwingUtilities.invokeLater(new Runnable() {
            public void run() {
                new layouts1();
            }
        });
    }
}

