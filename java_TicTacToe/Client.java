package finalProject;

import java.io.*;
import java.net.*;
import javax.swing.JOptionPane;

public class Client extends Thread {
    private Socket socket;
    private InetAddress ipAd;
    private PrintStream outStream;

    private BufferedReader inStream;

    private CFrame cFrm;

    public Client(CFrame clientFrm) {
        this.setDaemon(true);
        cFrm = clientFrm;
    }

    public void run() {
        try {
            socket = new Socket(cFrm.getIP(), 1823);
            outStream = new PrintStream(socket.getOutputStream());
            inStream = new BufferedReader(
                    new InputStreamReader(socket.getInputStream()));
            String str = "";
            send2client("連線成功");//SERVERF
            while (!(str = inStream.readLine()).equals("")) {
                if (str.charAt(0) == '$' && str.charAt(2) == '@') {
                    cFrm.playing(str);
                    cFrm.setGround(0);
                } else {
                    cFrm.addMsg(str);
                }
                if(str.equals("OK")){
                	cFrm.replay();
                }
            }
        } catch (Exception e) {
            javax.swing.JOptionPane.showMessageDialog(null,
                    "Error" + e.toString());
        }
    }

    public void send2client(String msg) {
        try {
            if (outStream != null) {
                outStream.println(msg);
            } else {
                javax.swing.JOptionPane.showMessageDialog(null,
                        "Error, Please make connection with Client frist");
            }
        } catch (Exception e) {
            javax.swing.JOptionPane.showMessageDialog(null,
                    "Error" + e.toString());
        }
    }

    public void closeSocket() {
        try {
            inStream.close();socket.close();
        } catch (Exception e) {
            javax.swing.JOptionPane.showMessageDialog(null,
                    "Error" + e.toString());
        }
    }
    
    
    

}