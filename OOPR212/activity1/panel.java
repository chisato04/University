package OOPR212.activity1;

import java.awt.*;
import javax.swing.JPanel;

public class panel extends JPanel
{

    panel(){
        this.setPreferredSize(new Dimension(720, 360));
    }

    public void paint(Graphics g){
        Graphics2D gMalinao = (Graphics2D) g;
        Color myBlue = new Color(30, 65, 156);
        Color myRed = new Color(206, 32, 41);
        Color myYellow = new Color(250, 210, 21);

        // redtangle
        gMalinao.setColor(myRed);
        gMalinao.fillRect(0, 180, 720, 180);

        // blue rectangle
        gMalinao.setColor(myBlue);
        gMalinao.fillRect(0, 0, 720, 180);

        // white triangle
        gMalinao.setColor(Color.white);
        int [] xpoints = {0,270,0};
        int [] ypoints  = {359,179,0};
        int nPoints = 3;
        gMalinao.fillPolygon(xpoints, ypoints, nPoints);

        // yellow sun
        gMalinao.setColor(myYellow);
        gMalinao.fillOval(40, 130, 100, 100);

        // star up
        gMalinao.setColor(myYellow);
        int [] x_starup = {37,44,67,47,55,35,10,23,4,27,37};
        int [] y_starup = {38,62,65,80,105,85,102,75,58,60,38};
        gMalinao.fillPolygon(x_starup, y_starup, 11);

        // star middle
        gMalinao.setColor(myYellow);
        int [] x_starmiddle = {187, 194, 217, 197, 205, 185, 160, 173, 154, 177, 187};
        int [] y_starmiddle = {148, 171, 175, 190, 215, 195, 212, 185, 168, 170, 148};
        gMalinao.fillPolygon(x_starmiddle, y_starmiddle, 11);

        // star down
        gMalinao.setColor(myYellow);
        int [] x_stardown = {37,44,67,47,55,35,10,23,4,27,37};
        int [] y_stardown = {248, 271, 275, 290, 315, 295, 312, 285, 268, 270, 248};
        gMalinao.fillPolygon(x_stardown, y_stardown, 11);

        // shine1
        gMalinao.setColor(myYellow);
        gMalinao.setStroke(new BasicStroke(30));
        gMalinao.drawLine(45, 180, 135, 180);

        // shine 2
        gMalinao.setColor(myYellow);
        gMalinao.setStroke(new BasicStroke(30));
        gMalinao.drawLine(90, 225, 90, 135);

        // shine 3
        gMalinao.setColor(myYellow);
        gMalinao.setStroke(new BasicStroke(30));
        gMalinao.drawLine(45, 240, 135, 120);

        // shine 4
        gMalinao.setColor(myYellow);
        gMalinao.setStroke(new BasicStroke(30));
        gMalinao.drawLine(135, 240, 45, 120);
    }

}// end of code