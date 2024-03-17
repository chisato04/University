package OOPR212.Prelim.JList;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import javax.swing.*;

public class jlist2 {

	private String addlistcmd; //add command
	private String removelistcmd; //remove command
	private String addfavecmd; //add to favorites command
	private String getusertitle; //get user title text field
	private int init1; //for loop for Music List
	private int init2; //for loop for Favorites List
	private String remmarr = ""; //force remove index 0 favorites list


	@SuppressWarnings({ "rawtypes", "unchecked" })
    public jlist2() {

		JLabel titleMusicList = new JLabel();
		titleMusicList.setText("Music List");
		titleMusicList.setBounds(10, 40, 120, 20);
		titleMusicList.setName("titleMusicList");

		JLabel titleFaveList = new JLabel();
		titleFaveList.setText("Favorites");
		titleFaveList.setBounds(190, 40, 120, 20);

		String MusicListArr[] = {"Music Main 1", "Music Main 2"};
		JList musicList = new JList (MusicListArr);
		musicList.setBounds(10, 70, 130, 120);
		musicList.setName("musicList");

		String FaveListArr[] = {""};
		//FaveListArr.
		JList favoritesList = new JList();
		favoritesList.setBounds(190, 70, 130, 120);
		favoritesList.setName("favoritesList");

		JTextField musicTextField = new JTextField();
		musicTextField.setBounds(100, 210, 150, 25);
		musicTextField.setName("musicTextField");

		JLabel labelTitle = new JLabel();
		labelTitle.setText("Title:");
		labelTitle.setBounds(35, 210, 70, 25);
		labelTitle.setName("labelTitle");

		DefaultListModel rmsel = new DefaultListModel(); //to trigger add/remove list
		DefaultListModel favelist = new DefaultListModel(); //to trigger add to favorites

		//loop for music list
		for (init1 = 0; init1 < MusicListArr.length; init1++) {

			rmsel.addElement(MusicListArr[init1]);
			musicList.setModel(rmsel);

		}

		//loop for favorites list
		for (init2 = 0; init2 < FaveListArr.length; init2++) {
			favelist.addElement(FaveListArr[init2]);
			favoritesList.setModel(favelist);
		}

		if(remmarr == "" && FaveListArr[0] == "") {

			favelist.removeElement(remmarr);

		}


		JButton addButton = new JButton();
		addButton.setText("Add");
		addButton.setBounds(35, 250, 90, 30);
		addButton.setName("addButton");

		addButton.addActionListener(new ActionListener() {

			public void actionPerformed(ActionEvent event1) {

				addlistcmd = event1.getActionCommand();
				getusertitle = musicTextField.getText();

				if (addlistcmd.equals("Add")) {

					rmsel.addElement(getusertitle);

				}

			}

		});

		JButton addToFavoritesButton = new JButton();
		addToFavoritesButton.setText(">");
		addToFavoritesButton.setBounds(143, 110, 45, 30);
		addToFavoritesButton.setName("addToFavoritesButton");

		addToFavoritesButton.addActionListener(new ActionListener() {

			public void actionPerformed (ActionEvent event2) {



				addfavecmd = event2.getActionCommand();

				if (addfavecmd.equals(">")) {

					favelist.addElement(rmsel.getElementAt(musicList.getSelectedIndex()));

				}

			}

		});

		JButton removeButton = new JButton();
		removeButton.setText("Remove");
		removeButton.setBounds(145, 250, 90, 30);
		removeButton.setName("removeButton");

		removeButton.addActionListener(new ActionListener() {

			public void actionPerformed (ActionEvent event3) {

				removelistcmd = event3.getActionCommand();

				if (removelistcmd.equals("Remove")) {

					favelist.removeElement(rmsel.getElementAt(musicList.getSelectedIndex()));
					rmsel.removeElementAt(musicList.getSelectedIndex());

				}

			}
		});

		JPanel panel = new JPanel();
		panel.setLayout(null);
		panel.add(titleMusicList);
		panel.add(titleFaveList);
		panel.add(musicList); //bawal inull ang setLayout
		panel.add(favoritesList); //bawal inull ang setLayout
		panel.add(musicTextField);
		panel.add(labelTitle);
		panel.add(addButton);
		panel.add(removeButton);
		panel.add(addToFavoritesButton);

		JFrame frame = new JFrame();
		frame.setTitle("Music Player");
		frame.setSize(350, 350);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.setVisible(true);
		frame.add(panel);


	}

	public static void main(String[] args) {

		new jlist2();
	}
}
