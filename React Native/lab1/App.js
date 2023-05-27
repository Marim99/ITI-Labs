import { StatusBar } from "expo-status-bar";
import {
  StyleSheet,
  ScrollView,
  SafeAreaView,
  Image,
  Dimensions,
} from "react-native";

export default function App() {
  return (
    <SafeAreaView style={styles.container}>
      <ScrollView horizontal showsVerticalScrollIndicator={false}>
        <Image source={require("./assets/image1.jpg")} style={styles.image} />
        <Image
          source={require("./assets/image3.jpg")}
          style={styles.image}
        ></Image>
        <Image
          source={require("./assets/image4.jpg")}
          style={styles.image}
        ></Image>
        <StatusBar style="auto" />
      </ScrollView>
    </SafeAreaView>
  );
}
const screenWidth = Dimensions.get("window").width;
const screenHeight = Dimensions.get("window").height;

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: "center",
    alignItems: "center",
  },
  scrollViewContent: {
    alignItems: "center",
  },
  image: {
    width: screenWidth,
    height: screenHeight,
  },
});
