package OOPR212.midterm.JavaSwingEventAdapters;

import javax.swing.*;
import java.awt.*;
import java.awt.event.*;

public class eventAdapters1 extends JFrame {
    private JRadioButton smallRadioButton;
    private JRadioButton mediumRadioButton;
    private JRadioButton largeRadioButton;
    private JLabel helperLabel;
    private JButton mainButton;

    public eventAdapters1() {
        // Initialize components
        smallRadioButton = new JRadioButton("Small");
        mediumRadioButton = new JRadioButton("Medium");
        largeRadioButton = new JRadioButton("Large");
        helperLabel = new JLabel(" ");
        mainButton = new JButton("Click me!");

        // Set component names
        smallRadioButton.setName("smallRadioButton");
        mediumRadioButton.setName("mediumRadioButton");
        largeRadioButton.setName("largeRadioButton");
        helperLabel.setName("helperLabel");
        mainButton.setName("mainButton");

        // Group the radio buttons
        ButtonGroup group = new ButtonGroup();
        group.add(smallRadioButton);
        group.add(mediumRadioButton);
        group.add(largeRadioButton);

        // Set default sizes and selection
        mainButton.setPreferredSize(new Dimension(80, 30));
        smallRadioButton.setSelected(true);

        // Add action listeners for radio buttons
        smallRadioButton.addActionListener(e -> resizeButton(80, 30));
        mediumRadioButton.addActionListener(e -> resizeButton(160, 60));
        largeRadioButton.addActionListener(e -> resizeButton(240, 90));

        // Add mouse listeners for helper messages
        smallRadioButton.addMouseListener(new SizeHelperListener("Small: 80x30"));
        mediumRadioButton.addMouseListener(new SizeHelperListener("Medium: 160x60"));
        largeRadioButton.addMouseListener(new SizeHelperListener("Large: 240x90"));

        // Layout the components
        setLayout(new FlowLayout());
        add(smallRadioButton);
        add(mediumRadioButton);
        add(largeRadioButton);
        add(helperLabel);
        add(mainButton);

        // Set default close operation and window size
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setSize(300, 200);
    }

    private void resizeButton(int width, int height) {
        mainButton.setPreferredSize(new Dimension(width, height));
        mainButton.revalidate();
    }

    private class SizeHelperListener extends MouseAdapter {
        String message;

        public SizeHelperListener(String msg) {
            this.message = msg;
        }

        @Override
        public void mouseEntered(MouseEvent e) {
            helperLabel.setText(message);
        }

        @Override
        public void mouseExited(MouseEvent e) {
            helperLabel.setText(" ");
        }
    }

    public static void main(String[] args) {
        SwingUtilities.invokeLater(() -> {
            new eventAdapters1().setVisible(true);
        });
    }
}