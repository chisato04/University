package OOPR212.Prelim.JList;
import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class jlist1 extends JFrame {
    private JList<String> musicList;
    private DefaultListModel<String> listModel;
    private JTextField musicTextField;
    private JButton addButton;
    private JButton removeButton;

    public jlist1() {
        setTitle("Music Player");
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setLayout(new FlowLayout());

        // Initialize components
        listModel = new DefaultListModel<>();
        musicList = new JList<>(listModel);
        musicList.setName("musicList");
        musicList.setPreferredSize(new Dimension(200, 150));
        musicList.setSelectionMode(ListSelectionModel.SINGLE_SELECTION);
        listModel.addElement("Music Main 1");
        listModel.addElement("Music Main 2");

        musicTextField = new JTextField(15);
        musicTextField.setName("musicTextField");

        addButton = new JButton("Add");
        addButton.setName("addButton");
        addButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                String newMusic = musicTextField.getText().trim();
                if (!newMusic.isEmpty()) {
                    listModel.addElement(newMusic);
                    musicTextField.setText("");
                }
            }
        });

        removeButton = new JButton("Remove");
        removeButton.setName("removeButton");
        removeButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                int selectedIndex = musicList.getSelectedIndex();
                if (selectedIndex != -1) {
                    listModel.remove(selectedIndex);
                }
            }
        });

        // Add components to the frame
        add(new JScrollPane(musicList));
        add(musicTextField);
        add(addButton);
        add(removeButton);

        pack();
        setLocationRelativeTo(null);
        setVisible(true);
    }

    public static void main(String[] args) {
        SwingUtilities.invokeLater(new Runnable() {
            @Override
            public void run() {
                new jlist1();
            }
        });
    }
}
