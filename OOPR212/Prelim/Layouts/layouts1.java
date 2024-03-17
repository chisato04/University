import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class layouts1 extends JFrame {
    private CardLayout cardLayout;
    private JPanel cardPanel;
    private JButton prevButton, nextButton;
    private JTextField nameTextField, ageTextField;
    private JTextArea quoteTextArea;
    private JLabel nameLabel, ageLabel, quoteLabel;

    public layouts1() {
        setTitle("Info Recorder");
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setSize(400, 300);
        setLocationRelativeTo(null);

        cardLayout = new CardLayout();
        cardPanel = new JPanel(cardLayout);
        cardPanel.setName("cardPanel");

        // First Panel
        JPanel firstPanel = new JPanel(new GridLayout(2, 2));
        nameTextField = new JTextField();
        nameTextField.setName("nameTextField");
        ageTextField = new JTextField();
        ageTextField.setName("ageTextField");
        firstPanel.add(new JLabel("Name:"));
        firstPanel.add(nameTextField);
        firstPanel.add(new JLabel("Age:"));
        firstPanel.add(ageTextField);
        firstPanel.setName("firstPanel");

        // Second Panel
        JPanel secondPanel = new JPanel();
        secondPanel.setLayout(new BoxLayout(secondPanel, BoxLayout.Y_AXIS));
        quoteTextArea = new JTextArea();
        quoteTextArea.setName("quoteTextArea");
        secondPanel.add(new JScrollPane(quoteTextArea));
        secondPanel.setName("secondPanel");

        // Third Panel
        JPanel thirdPanel = new JPanel(new GridLayout(3, 1));
        nameLabel = new JLabel();
        nameLabel.setName("nameLabel");
        ageLabel = new JLabel();
        ageLabel.setName("ageLabel");
        quoteLabel = new JLabel();
        quoteLabel.setName("quoteLabel");
        thirdPanel.add(nameLabel);
        thirdPanel.add(ageLabel);
        thirdPanel.add(quoteLabel);
        thirdPanel.setName("thirdPanel");

        // Add panels to cardPanel
        cardPanel.add(firstPanel, "First");
        cardPanel.add(secondPanel, "Second");
        cardPanel.add(thirdPanel, "Third");

        // Navigation buttons
        prevButton = new JButton("Previous");
        nextButton = new JButton("Next");
        prevButton.setName("prevButton");
        nextButton.setName("nextButton");

        prevButton.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                cardLayout.previous(cardPanel);
                updateNavigationButtons();
            }
        });

        nextButton.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                if (getCurrentPageIndex() == 1) { // Moving from second to third panel
                    nameLabel.setText(nameTextField.getText());
                    ageLabel.setText(ageTextField.getText());
                    quoteLabel.setText(quoteTextArea.getText());
                }
                cardLayout.next(cardPanel);
                updateNavigationButtons();
            }
        });

        JPanel buttonPanel = new JPanel();
        buttonPanel.add(prevButton);
        buttonPanel.add(nextButton);

        add(cardPanel, BorderLayout.CENTER);
        add(buttonPanel, BorderLayout.SOUTH);

        updateNavigationButtons(); // Initial button state update
    }

    private void updateNavigationButtons() {
        int currentPageIndex = getCurrentPageIndex();
        prevButton.setVisible(currentPageIndex > 0);
        nextButton.setVisible(currentPageIndex < 2);
    }

    private int getCurrentPageIndex() {
        for (Component comp : cardPanel.getComponents()) {
            if (comp.isVisible()) {
                return java.util.Arrays.asList(cardPanel.getComponents()).indexOf(comp);
            }
        }
        return -1; // Should never happen
    }

    public static void main(String[] args) {
        SwingUtilities.invokeLater(() -> {
            layouts1 frame = new layouts1();
            frame.setVisible(true);
        });
    }
}