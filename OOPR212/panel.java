package OOPR212;

import java.awt.*;
import javax.swing.JPanel;

public class panel extends JPanel
{

    panel(){
        this.setPreferredSize(new Dimension(720, 360));
    }

    public void paint(Graphics g){
        Graphics2D g2 = (Graphics2D) g;
        Color myBlue = new Color(30, 65, 156);
        Color myRed = new Color(206, 32, 41);
        Color myYellow = new Color(250, 210, 21);

        // redtangle
        g2.setColor(myRed);
        g2.fillRect(0, 180, 720, 180);

        // blue rectangle
        g2.setColor(myBlue);
        g2.fillRect(0, 0, 720, 180);

        // white triangle
        g2.setColor(Color.white);
        int [] xpoints = {0,270,0};
        int [] ypoints  = {359,179,0};
        int nPoints = 3;
        g2.fillPolygon(xpoints, ypoints, nPoints);

        // yellow sun
        g2.setColor(myYellow);
        g2.fillOval(40, 130, 100, 100);

        // star up
        g2.setColor(myYellow);
        int [] x_starup = {37,44,67,47,55,35,10,23,4,27,37};
        int [] y_starup = {38,62,65,80,105,85,102,75,58,60,38};
        g2.fillPolygon(x_starup, y_starup, 11);

        // star middle
        g2.setColor(myYellow);
        int [] x_starmiddle = {187, 194, 217, 197, 205, 185, 160, 173, 154, 177, 187};
        int [] y_starmiddle = {148, 171, 175, 190, 215, 195, 212, 185, 168, 170, 148};
        g2.fillPolygon(x_starmiddle, y_starmiddle, 11);

        // star down
        g2.setColor(myYellow);
        int [] x_stardown = {37,44,67,47,55,35,10,23,4,27,37};
        int [] y_stardown = {248, 271, 275, 290, 315, 295, 312, 285, 268, 270, 248};
        g2.fillPolygon(x_stardown, y_stardown, 11);
    }

}// end of code