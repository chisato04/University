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
        int nPoints =3;
        g2.fillPolygon(xpoints, ypoints, nPoints);

        // yellow sun
        g2.setColor(myYellow);
        g2.fillOval(40, 130, 100, 100);
    }
}// end of code